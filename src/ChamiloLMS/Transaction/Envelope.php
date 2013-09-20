<?php
/* For licensing terms, see /license.txt */

namespace ChamiloLMS\Transaction;

use Exception as Exception;
use ChamiloLMS\Transaction\Plugin\WrapperPluginInterface;
use ChamiloLMS\Transaction\Plugin\WrapException;
use ChamiloLMS\Transaction\Plugin\UnwrapException;

/**
 * Represents a group of transactions to be exchanged from/to outside chamilo.
 */
class Envelope
{
    /**
     * Flag for state data member: envelope can behave as opened.
     */
    const STATE_OPEN = 0x1;
    /**
     * Flag for state data member: envelope can behave as closed.
     */
    const STATE_CLOSED = 0x2;

    /**
     * The handled ChamiloLMS\Transaction\TransactionLog objects.
     *
     * @var array
     */
    protected $transactions = array();
    /**
     * A place to store the raw envelope when it is closed.
     *
     * @var string
     */
    protected $blob = NULL;
    /**
     * Current state of the envelope.
     *
     * @var integer
     */
    protected $state = 0;
    /**
     * An instance of the wrapper plugin to use with this envelope.
     *
     * @var WrapperPluginInterface
     */
    protected $wrapperPlugin;

    /**
     * Basic constructor.
     *
     * @param array $data
     *   Information to build the object. The supported array keys are:
     *   - 'transactions': An array of ChamiloLMS\Transaction\TransactionLog
     *     objects to include.
     *   - 'blob': A string containing the envelope in raw form.
     *   - 'wrapper_plugin': A ChamiloLMS\WrapperPluginInterface object.
     */
    public function __construct(WrapperPluginInterface $wrapper_plugin, $data)
    {
        $this->wrapperPlugin = $wrapper_plugin;
        if (empty($data['transactions']) && empty($data['blob'])) {
            throw new Exception('Cannot create a envelope without transactions neither a blob.');
        }
        if (!empty($data['transactions'])) {
            $this->transactions = $data['transactions'];
            $this->state |= self::STATE_OPEN;
        }
        if (!empty($data['blob'])) {
            $this->blob = $data['blob'];
            $this->state |= self::STATE_CLOSED;
        }
    }

    /**
     * Get transactions.
     *
     * @return mixed
     *   This object transactions as array if open, or NULL if not opened.
     */
    public function getTransactions() {
        if ($this->state & self::STATE_OPEN) {
            return $this->transactions;
        }
        return NULL;
    }

    /**
     * Get blob.
     *
     * @return mixed
     *   Raw envelope as string if closed, or NULL if not closed.
     */
    public function getBlob() {
        if ($this->state & self::STATE_CLOSED) {
            return $this->blob;
        }
        return NULL;
    }

    /**
     * Wraps the transactions storing it on the blob data member.
     *
     * @throws WrapException
     *   On any error.
     */
    public function wrap() {
        if (!($this->state & self::STATE_OPEN)) {
            throw new WrapException('Trying to wrap an evelope without transactions.');
        }
        try {
            $this->prepare();
            $this->blob = $this->wrapperPlugin->wrap($this->transactions);
            $this->state |= self::STATE_CLOSED;
        }
        catch (Exception $exception) {
            throw new WrapException('Unable to wrap correctly the transactions. ' . $exception->getMessage());
        }
    }

    /**
     * Unwraps the transactions storing them on the transactions data member.
     *
     * @throws WrapException
     *   On any error.
     */
    public function unwrap() {
        if (!($this->state & self::STATE_CLOSED)) {
            throw new UnwrapException('Trying to unwrap an evelope without a blob.');
        }
        try {
            $this->transactions = $this->wrapperPlugin->unwrap($this);
            $this->state |= self::STATE_OPEN;
        }
        catch (Exception $exception) {
            throw new UnwrapException('Unable to unwrap correctly the envelope. ' . $exception->getMessage());
        }
    }

    /**
     * Prepares the transactions to be wrapped.
     *
     * @throws WrapException
     *   On any error.
     */
    protected function prepare() {
        $error_messages = '';

        foreach ($this->transactions as $transaction) {
            try {
                $transaction->export();
            } catch (Exception $export_exception) {
                $error_messages .= sprintf("%s: %s\n", $transaction->id, $export_exception->getMessage());
            }
        }
        if (!empty($error_messages)) {
            throw new WrapException(sprintf("Failed to prepare some transactions:\n%s", $error_messages));
        }
    }
}

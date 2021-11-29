<?php
interface InvoiceInterface{
    public function output();
}

class Order{
    protected $order;
    protected $invoice;

    /**
     * Order constructor.
     * @param $order
     * @param InvoiceInterface $invoice
     */
    public function __construct($order,InvoiceInterface $invoice)
    {
        $this->order = $order;
        $this->invoice = $invoice;
    }

    public function process()
    {
        // Process order
    }

    public function invoice()
    {
        return $this->invoice->output();
    }
}

class PDFInvoice implements InvoiceInterface{
    public function output()
    {
        // Return pdf
    }
}

class HtmlInvoice implements InvoiceInterface{
    public function output()
    {
        // Return html
    }
}

class OrderModel {
    /**
     * @param Order $order
     */
    public function save(Order $order)
    {
        // $order save
    }

    /**
     * @param Order $order
     */
    public function update(Order $order)
    {
        // $order update
    }
}

$order = new Order([
    'product1',
    'product2',
    'product3'
],new HtmlInvoice());
$order->process();

$orderModel = new OrderModel();
$orderModel->save($order);
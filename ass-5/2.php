<?php

// Define the SalesOrder class
class SalesOrder {
    // Properties
    private $sonumber;
    private $sOrderDate;
    private $client; // Reference to the client object

    // Constructor
    public function __construct($sonumber, $sOrderDate, $client) {
        $this->sonumber = $sonumber;
        $this->sOrderDate = $sOrderDate;
        $this->client = $client;
    }

    // Getters
    public function getSonumber() {
        return $this->sonumber;
    }

    public function getSOrderDate() {
        return $this->sOrderDate;
    }

    public function getClient() {
        return $this->client;
    }
}

// Define the Client class
class Client {
    // Properties
    private $clientno;
    private $name;
    private $address;
    private $salesOrders = array(); // Collection of sales orders placed by the client

    // Constructor
    public function __construct($clientno, $name, $address) {
        $this->clientno = $clientno;
        $this->name = $name;
        $this->address = $address;
    }

    // Method to add a sales order to the client's collection
    public function addSalesOrder($salesOrder) {
        $this->salesOrders[] = $salesOrder;
    }

    // Method to display all sales orders placed before a given date
    public function displayOrdersBeforeDate($date) {
        echo "Sales orders placed by {$this->name} before $date:\n";
        foreach ($this->salesOrders as $salesOrder) {
            if ($salesOrder->getSOrderDate() < $date) {
                echo "Sales Order No: " . $salesOrder->getSonumber() . ", Order Date: " . $salesOrder->getSOrderDate() . "\n";
            }
        }
    }
}

// Create some SalesOrder objects
$order1 = new SalesOrder(1, "2022-01-15", null);
$order2 = new SalesOrder(2, "2022-02-20", null);
$order3 = new SalesOrder(3, "2022-03-25", null);

// Create some Client objects
$client1 = new Client(1, "John Doe", "123 Main St");
$client2 = new Client(2, "Jane Smith", "456 Elm St");

// Assign sales orders to clients
$client1->addSalesOrder($order1);
$client1->addSalesOrder($order2);
$client2->addSalesOrder($order3);

// Prompt user for sales order date
echo "Enter sales order date (YYYY-MM-DD): ";
$orderDate = readline();

// Find and display sales orders placed before the given date
foreach ([$client1, $client2] as $client) {
    $client->displayOrdersBeforeDate($orderDate);
}

?>

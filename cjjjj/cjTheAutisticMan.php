<?php
class Item {
    private $name;
    private $description;
    private $startingPrice;
    private $seller;
    private $currentBid;

    public function __construct($name, $description, $startingPrice) {
        $this->name = $name;
        $this->description = $description;
        $this->startingPrice = $startingPrice;
    }

    public function listItem($seller, $logger) {
        $this->seller = $seller;
        $logger->log("{$this->name} listed by {$this->seller} for starting price {$this->startingPrice}." .PHP_EOL);
        $logger->log("{$this->name} selling by {$this->seller} for starting price {$this->startingPrice}." .PHP_EOL);

    }

    public function placeBid($bidder, $amount, $logger) {
        if ($amount > $this->currentBid) {
            $this->currentBid = $amount;
            $logger->log("{$bidder} placed a bid of {$amount} on {$this->name}." .PHP_EOL);
        } else {
            $logger->log("Bid amount must be higher than current bid of {$this->currentBid}." .PHP_EOL);
        }
    }

    public function getCurrentBid() {
        return $this->currentBid;
    }

    public function getName() {
        return $this->name;
    }
}

class Bidder {
    private $name;
    private $id;

    public function __construct($name, $id) {
        $this->name = $name;
        $this->id = $id;
    }

    public function bidOnItem($item, $amount, $logger) {
        $currentBid = $item->getCurrentBid();
        if ($amount == $currentBid) {
            $item->placeBid($this->name, $amount);
        } else {
            $logger->log("Bid amount must be higher than current bid of {$currentBid}.".PHP_EOL);
        }
    }

    public function withdrawBid($item, $logger) {
        $logger->log("{$this->name} win the bidding on {$item->getName()}" .PHP_EOL);
        
        
    }
}


class Auctioneer {
    public function manageAuction($items, $logger) {
        $logger->log("Auctioneer is managing the auction:\n");
        foreach ($items as $items) {
            $logger->log("Managing item: {$items->getName()} (Current bid: {$items->getCurrentBid()})\n");
            
        }
    }

    public function closeAuction($item, $logger) {
        $logger->log("Closing auction for item: {$item->getName()} (Final bid: {$item->getCurrentBid()})\n");

        
    }    
}

interface Logger{
    public function log($message);

}
class FileLogger implements Logger {

    private $handle;

    private $logFile;

    public function __construct($filename,$mode = 'r+'){
        $this->logFile = $filename;
        $this->handle = fopen($filename, $mode) or die('Could not open log file.');
    }
    public function log($message){
        $message = date("D M j G:i:s T Y") . " - " . $message;
        fwrite($this->handle, $message);
    }
    
    public function __destruct(){
        if($this->handle){
            fclose($this->handle);
        }
    }
}


class DatabaseLogger implements Logger{
    public function log($message){
    echo sprintf("log %s to the Database\n", $message);
}
}

$logger =  new FileLogger('./log.txt', 'w+');
$item = new Item("yamashita statue", "", 25600) ;
$item2 = new Item("kitsune sword", "", 23500);
$item->listItem(" melvin amalla" ,$logger) ;
$item2->listItem("kenneth bislig",$logger);

$bidder = new Bidder("Christian Timagos", 1);
$bidder2 = new Bidder("Joshua Portacion", 2);
$bidder->bidOnItem($item, 32400,$logger);
$bidder2->bidOnItem($item2, 38360,$logger);


$auctioneer = new Auctioneer();
$auctioneer->manageAuction([$item],$logger);
$auctioneer->manageAuction([$item2],$logger);
$auctioneer->closeAuction($item,$logger);
$auctioneer->closeAuction($item2,$logger);
$bidder->withdrawBid($item,$logger);
$bidder2->withdrawBid($item2,$logger);

$item = new Item("yamashita statue", "", 25600) ;
$item2 = new Item("kitsune sword", "", 23500);

$item->listItem(" melvin amalla",$logger) ;
$item2->listItem("kenneth bislig",$logger);
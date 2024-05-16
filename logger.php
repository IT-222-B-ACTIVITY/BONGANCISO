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

    public function listItem($seller) {
        $this->seller = $seller;
        echo "{$this->name} listed by {$this->seller} for starting price {$this->startingPrice}." .PHP_EOL;
        echo "{$this->name} selling by {$this->seller} for starting price {$this->startingPrice}." .PHP_EOL;

    }

    public function placeBid($bidder, $amount) {
        if ($amount > $this->currentBid) {
            $this->currentBid = $amount;
            echo "{$bidder} placed a bid of {$amount} on {$this->name}." .PHP_EOL;
        } else {
            echo "Bid amount must be higher than current bid of {$this->currentBid}." .PHP_EOL;
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

    public function bidOnItem($item, $amount) {
        $currentBid = $item->getCurrentBid();
        if ($amount == $currentBid) {
            $item->placeBid($this->name, $amount);
        } else {
            echo "Bid amount must be higher than current bid of {$currentBid}.";
        }
    }

    public function withdrawBid($item) {
        echo "{$this->name} win the bidding on {$item->getName()}" .PHP_EOL;
        
        
    }
}


class Auctioneer {
    public function manageAuction($items) {
        echo "Auctioneer is managing the auction:\n";
        foreach ($items as $items) {
            echo "Managing item: {$items->getName()} (Current bid: {$items->getCurrentBid()})\n";
            
        }
    }

    public function closeAuction($item) {
        echo "Closing auction for item: {$item->getName()} (Final bid: {$item->getCurrentBid()})\n";
        
    }    
}

interface logger{

    public function log($message);
}

class Filelogger implements logger{

    private $handle ;

    private $logFile;

    public function __construct($filename, $mode = 'a') {
    
        $this->logFile = $filename;
        $this->handle = fopen($filename,$mode) or die("Could not open the log File");

    }

    public function log($message)
    {
        $message = date("D M j G:i:s T Y") . ' : ' . $message . PHP_EOL;
        fwrite($this->handle, $message);
    }

    public function __destruct()
    {
        if($this->handle){
            fclose($this->handle);
        }
    }
}

$item = new Item("yamashita statue", "", 25600) ;
$item2 = new Item("kitsune sword", "", 23500);
$item->listItem(" melvin amalla") ;
$item2->listItem("kenneth bislig");

$bidder = new Bidder("Christian Timagos", 1);
$bidder2 = new Bidder("Joshua Portacion", 2);
$bidder->bidOnItem($item, 32400);
$bidder2->bidOnItem($item2, 38360);


$auctioneer = new Auctioneer();
$auctioneer->manageAuction([$item]);
$auctioneer->manageAuction([$item2]);
$auctioneer->closeAuction($item);
$auctioneer->closeAuction($item2);
$bidder->withdrawBid($item);
$bidder2->withdrawBid($item2);

$item = new Item("yamashita statue", "", 25600) ;
$item2 = new Item("kitsune sword", "", 23500);

$item->listItem(" melvin amalla") ;
$item2->listItem("kenneth bislig");
<?php
namespace Models;

class Reserve{
    private $id;
    private $dateFrom;
    private $dateUntil;
    private $amountReserve;
    private $totalValue;


    


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of dateFrom
     */ 
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Set the value of dateFrom
     *
     * @return  self
     */ 
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Get the value of dateUntil
     */ 
    public function getDateUntil()
    {
        return $this->dateUntil;
    }

    /**
     * Set the value of dateUntil
     *
     * @return  self
     */ 
    public function setDateUntil($dateUntil)
    {
        $this->dateUntil = $dateUntil;

        return $this;
    }

    /**
     * Get the value of amountReserve
     */ 
    public function getAmountReserve()
    {
        return $this->amountReserve;
    }

    /**
     * Set the value of amountReserve
     *
     * @return  self
     */ 
    public function setAmountReserve($amountReserve)
    {
        $this->amountReserve = $amountReserve;

        return $this;
    }

    /**
     * Get the value of totalValue
     */ 
    public function getTotalValue()
    {
        return $this->totalValue;
    }

    /**
     * Set the value of totalValue
     *
     * @return  self
     */ 
    public function setTotalValue($totalValue)
    {
        $this->totalValue = $totalValue;

        return $this;
    }
}
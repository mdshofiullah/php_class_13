<?php


namespace App\classes;


class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $result;
    protected $i;
    protected $oddEven;
    protected $User;

    public function __construct($post=null)
    {
        $this->startingNumber   = $post['starting_number'];
        $this->endingNumber     = $post['ending_number'];
        if (isset($post['odd_even'])){
            $this->oddEven      = $post['odd_even'];
        }



//       ****** to check if the value was passes through the property we use exit() to stop the apache
//        echo $this->oddEven;
//        exit();
    }

    public function index()
    {
        header('Location: pages/index.php');
    }

    public function makeSeries()
    {
        if($this->startingNumber > $this->endingNumber)
        {
            return $this->bigToSmallSeries();
        }
        else
        {
            if ($this->oddEven == 'odd')
            {
                return $this->smallToBigOddSeries();
            }
            elseif ($this->oddEven == 'even')
            {
                return $this->smallToBigEvenSeries();
            }
            else
            {
                return $this->smallToBigSeries();
            }


        }

    }
    protected function smallToBigOddSeries()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            if ($this->i % 2 != 0)
            {
                $this->result .= $this->i.' ';
            }

//          ********** if (.=)concrete sign not given then value will be replaced with the last number assigned *****
        }
        return $this->result;
    }
    protected function smallToBigEvenSeries()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            if ($this->i % 2 == 0)
            {
                $this->result .= $this->i.' ';
            }

//          ********** if (.=)concrete sign not given then value will be replaced with the last number assigned *****
        }
        return $this->result;
    }

    protected function bigToSmallSeries()
    {
        for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
        {

            $this->result .= $this->i.' ';
            //********** if (.=)concrete sign not given then value will be replaced with the last number assigned *****
        }
        return $this->result;
    }

    protected function smallToBigSeries()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            $this->result .= $this->i.' ';
//          ********** if (.=)concrete sign not given then value will be replaced with the last number assigned *****
        }
        return $this->result;
    }
}
<?php
class Person
{
    private $paid_amount;

    private $wsk_share;
    private $ijz_share;
    private $brk_share;
    private $imd_share;
    private $nwb_share;
    private $isn_share;
    private $jal_share;
    private $kas_share;
    private $nsr_share;
    private $isr_share;
    private $yas_share;
    private $nwbc_share;
    private $ans_share;
    private $irf_share;
    private  $nae_share;
    private $mhb_share;
    private $mus_share;
    private $isq_share;
    private $asf_share;
    private $wzr_share;

    function execute_query($con)
    {
        $query = "SELECT * FROM bills WHERE status=1";
        $exe = mysqli_query($con, $query);
        return $exe;
    }

    function total_share($wsk, $ijz, $brk, $imd, $nwb, $isn, $jal, $kas, $nsr, $isr, $yas, $nwbc, $ans, $mhb, $mus, $isq, $asf, $irf, $nae, $wzr)
    {

        $this->wsk_share = $wsk;
        $this->imd_share = $imd;
        $this->ijz_share = $ijz;
        $this->brk_share = $brk;
        $this->nwb_share = $nwb;
        $this->isn_share = $isn;
        $this->jal_share = $jal;
        $this->kas_share = $kas;
        $this->nsr_share = $nsr;
        $this->isr_share = $isr;
        $this->yas_share = $yas;
        $this->nwbc_share = $nwbc;
        $this->ans_share = $ans;
        $this->mhb_share = $mhb;
        $this->mus_share = $mus;
        $this->isq_share = $isq;
        $this->asf_share = $asf;
        $this->irf_share = $irf;
        $this->nae_share = $nae;
        $this->wzr_share = $wzr;


        $total_share = $this->wsk_share + $this->imd_share + $this->ijz_share + $this->brk_share + $this->nwb_share +
            $this->isn_share + $this->jal_share + $this->kas_share + $this->nsr_share + $this->isr_share + $this->yas_share +
            $this->nwbc_share + $this->ans_share + $this->mhb_share + $this->mus_share + $this->isq_share + $this->asf_share + $this->irf_share + $this->nae_share + $this->wzr_share;

        return $total_share;
    }

    function one_share_price($amount, $total_share)
    {

        $this->paid_amount = $amount;
        //devision by zero

        if ($total_share > 0) {
            $one_share_price = $this->paid_amount / $total_share;

            return $one_share_price;
        } else {

            echo "devision by zero";
        }
    }

    function calculate_share($person_share, $one_share_price)
    {

        $share = ($person_share * $one_share_price);
        return $share;
    }



    function calculate_credit($con, $paid_person)
    {

        $qsum = "SELECT SUM(paid_amount)as paid FROM bills WHERE paid_person='$paid_person' AND status=1";
        $exe = mysqli_query($con, $qsum) or die('error in qsum');
        $exer = mysqli_fetch_assoc($exe);
        if (isset($exer['paid'])) {
            return $exer['paid'];
        } else {

            return 0;
        }
    }
}

$sh = new Person();

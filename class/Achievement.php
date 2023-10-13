<?php

include_once('Config.php');

class Achievement extends Config
{
    public function show()
    {
        $sql = "SELECT * FROM `tbl_achievement` ";
        return mysqli_query($this->con, $sql);
    }
    public function update($fromData, $id)
    {
        $achieve_customers = $fromData['achieve_customers'];
        $achieve_chefs = $fromData['achieve_chefs'];
        $achieve_events = $fromData['achieve_events'];
        $achieve_video = $fromData['achieve_video'];


        $sql = "UPDATE `tbl_achievement` SET `achieve_customers`='$achieve_customers',`achieve_chefs`='$achieve_chefs',`achieve_events`='$achieve_events',`achieve_video`='$achieve_video' WHERE `achieve_id`='$id'";

        if (empty($achieve_customers)) {
            return '<div class="alert alert-danger">Customer is required</div>';
        } elseif (empty($achieve_chefs)) {
            return '<div class="alert alert-danger">Chef is required</div>';
        } elseif (empty($achieve_events)) {
            return '<div class="alert alert-danger">Event is required</div>';
        } else {
            if (mysqli_query($this->con, $sql)) {
                return '<div class="alert alert-success">Data Modify Successful.</div>';
            } else {
                return '<div class="alert alert-danger">Data Modify Failed.</div>';
            }
        }
    }
}

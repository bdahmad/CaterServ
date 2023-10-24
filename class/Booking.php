<?php

include_once('Config.php');

class Booking extends Config
{
    public function insert($allData)
    {
        $country_id = htmlentities($allData['country_id'], ENT_QUOTES);
        $city_id = htmlentities($allData['city_id'], ENT_QUOTES);
        $place_id = htmlentities($allData['place_id'], ENT_QUOTES);
        $booking_event_type = htmlentities($allData['booking_event_type'], ENT_QUOTES);
        $booking_num_people = htmlentities($allData['booking_num_people'], ENT_QUOTES);
        $booking_type_people = htmlentities($allData['booking_type_people'], ENT_QUOTES);
        $booking_contact_no = htmlentities($allData['booking_contact_no'], ENT_QUOTES);
        $booking_date = htmlentities($allData['booking_date'], ENT_QUOTES);
        $booking_email = htmlentities($allData['booking_email'], ENT_QUOTES);

        $sql = "INSERT INTO `tbl_booking`(`country_id`, `city_id`, `place_id`, `booking_event_type`, `booking_num_people`, `booking_type_people`, `booking_contact_no`, `booking_date`, `booking_email`) VALUES ('$country_id','$city_id','$place_id','$booking_event_type','$booking_num_people','$booking_type_people','$booking_contact_no','$booking_date','$booking_email')";

        if (empty($country_id)) {
            return '<div class="alert alert-danger">Country is required.</div>';
        } else if (empty($city_id)) {
            return '<div class="alert alert-danger">City is required.</div>';
        } else if (empty($place_id)) {
            return '<div class="alert alert-danger">Place is required.</div>';
        } else if (empty($booking_event_type)) {
            return '<div class="alert alert-danger">Event Type is required.</div>';
        } else if (empty($booking_num_people)) {
            return '<div class="alert alert-danger">No of People is required.</div>';
        } else if (empty($booking_type_people)) {
            return '<div class="alert alert-danger">Type of People is required.</div>';
        } else if (empty($booking_contact_no)) {
            return '<div class="alert alert-danger">Contact No is required.</div>';
        } else if (empty($booking_date)) {
            return '<div class="alert alert-danger">Date is required.</div>';
        } else if (empty($booking_email)) {
            return '<div class="alert alert-danger">Email is required.</div>';
        } else {
            if (mysqli_query($this->con, $sql)) {
                return '<div class="alert alert-success">Thank You. Successfully Complete.</div>';
            } else {
                return '<div class="alert alert-danger">Oops. Operation Failed.</div>';
            }
        }
    }

    public function view()
    {
        $sql = "SELECT * FROM `tbl_booking` Natural JOIN `tbl_country` NATURAL JOIN `tbl_city` NATURAL JOIN `tbl_place` ";
        return mysqli_query($this->con, $sql);
    }
    public function find($getViewId)
    {
        $sql = "SELECT * FROM `tbl_country` WHERE booking_id = '$getViewId' ";
        return mysqli_query($this->con, $sql);
    }
    public function update($allData, $getEditId)
    {
        $service_icon = htmlentities($allData['service_icon'], ENT_QUOTES);
        $service_title = htmlentities($allData['service_title'], ENT_QUOTES);
        $service_description = htmlentities($allData['service_description'], ENT_QUOTES);
        $service_link = htmlentities($allData['service_link'], ENT_QUOTES);

        $sql = "UPDATE `tbl_services` SET `service_icon`='$service_icon',`service_title`=' $service_title ',
      `service_description`='$service_description',`service_link`='$service_link' WHERE `service_id`='$getEditId'";

        if (empty($service_icon)) {
            return '<div class="alert alert-danger">Please select icon.</div>';
        } elseif (empty($service_title)) {
            return '<div class="alert alert-danger">Title is required</div>';
        } elseif (empty($service_description)) {
            return '<div class="alert alert-danger">Description is required</div>';
        } elseif (empty($service_link)) {
            return '<div class="alert alert-danger">Link is required</div>';
        } else {
            if (mysqli_query($this->con, $sql)) {
                return '<div class="alert alert-success">Update Successful.</div>';
            } else {
                return '<div class="alert alert-danger">Update Failed.</div>';
            }
        }
    }
    public function delete($getDeleteId)
    {
        $sql = "DELETE FROM `tbl_services` WHERE service_id = '$getDeleteId'";
        return mysqli_query($this->con, $sql);
    }
}

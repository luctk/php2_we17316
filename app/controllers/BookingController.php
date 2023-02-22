<?php
namespace App\Controllers;
use App\Models\Booking;
class BookingController extends BaseController {

    public $booking;

    public function __construct()
    {
        $this->booking = new Booking();
    }

    public function index(){

        $bookings = $this->booking->getBooking();
        $this->render('booking.list', compact('bookings'));
    }

    public function addBooking()
    {
        $this->render('booking.add');
    }

    public function addBookingPost()
    {
        if (isset($_POST['them'])) {
            $errors = [];
            if (empty($_POST['ten_sp'])) {
                $errors[] = "tên sp k được bỏ trống";

            }
            if (empty($_POST['ngay_dat'])) {
                $errors[] = "ngày đặt ko được bỏ trống";
            }
            if (count($errors) > 0) {
                redirect('errors', $errors, 'add-booking');
            } else {
                $result = $this->booking->addBooking(null, $_POST['ten_sp'], $_POST['ngay_dat']);
                if ($result) {
                    redirect('success', 'thêm  thành công', 'add-booking');
                }
            }
        }
    }

    public function editBooking($id)
    {
        $bookings = $this->booking->getDetailBooking($id);
        return $this->render('booking.edit', compact('bookings'));
    }

    public function editBookingPost($id)
    {
        if (isset($_POST['sua'])) {

            $result = $this->booking->updateBooking($id, $_POST['ten_sp'], $_POST['ngay_dat']);
            if ($result) {
                redirect('success', 'sửa  thành công', 'edit-booking/' . $id);
            }
        }
    }

    public function deleteProduct($id)
    {
        $this->product->deleteProduct($id);
        route('test');
        die();


    }
}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/create-event.css">
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="flex_header">
                        <div class="item">
                            <img srcset="assets/img/tichetra.png" class="brand-logo">
                        </div>
                        <div class="item">
                            <div class="dropdown">
                                <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    M
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <span class="bg-success-rounded">M</span>
                                        <h6>Mohit Sharma</h6>
                                        <p>mohitsharma.websutility@gmail.com</p>
                                    </li>
                                    <li><a class="text-dark text-decoration-none lh-2 fs-15" href="#"><i class="ri-user-line"></i> Manage Account</a></li>
                                    <li><a class="text-dark text-decoration-none lh-2 fs-15" href="#"><i class="ri-calendar-event-line"></i> Manage Events </a></li>
                                    <li><a class="text-danger text-decoration-none lh-2 fs-15" href="#"><i class="ri-logout-box-r-line"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center text-white py-5">
                        <h4 class="mb-3 fw-bold">Create Event</h4>
                        <p>Provide basic event details to get started. Once the event is created, you'll be directed <br> to event admin dashboard where you can edit the tickets and event details.</p>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <section class="createEventForm">
        <div class="container">
            <div class="col-md-12">
                <div class="formEvent">
                    <form>
                        <div class="row g-3">

                            <!-- Event Name -->
                            <div class="col-md-12">
                                <label class="form-label">Event Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter event name" required>
                            </div>

                            <!-- Event Starts On -->
                            <div class="col-md-6">
                                <label class="form-label">Event Starts On <span class="text-danger">*</span></label>
                                <input type="datetime-local" class="form-control" required>
                            </div>

                            <!-- Event Ends On -->
                            <div class="col-md-6">
                                <label class="form-label">Event Ends On <span class="text-danger">*</span></label>
                                <input type="datetime-local" class="form-control" required>
                            </div>

                            <!-- Time Zone -->
                            <div class="col-md-6">
                                <label class="form-label">Time Zone <span class="text-danger">*</span></label>
                                <select class="form-select" required>
                                    <option selected disabled>Select Time Zone</option>
                                    <option>(GMT+05:30) India Standard Time</option>
                                    <option>(GMT+00:00) UTC</option>
                                </select>
                            </div>

                            <!-- Event Type -->
                            <div class="col-md-3">
                                <label class="form-label">Event Type <span class="text-danger">*</span></label>
                                <select class="form-select" id="freePaid" required>
                                    <option selected disabled>Select</option>
                                    <option value="free">Free</option>
                                    <option value="paid">Paid</option>
                                </select>
                            </div>

                            <!-- Event Visibility -->
                            <div class="col-md-3">
                                <label class="form-label">Event Visibility <span class="text-danger">*</span></label>
                                <select class="form-select" required>
                                    <option selected disabled>Select</option>
                                    <option>Public</option>
                                    <option>Private</option>
                                </select>
                            </div>

                            <!-- Event Mode -->
                            <div class="col-md-6">
                                <label class="form-label">Event Mode <span class="text-danger">*</span></label>
                                <select class="form-select" required>
                                    <option selected disabled>Select Event Mode</option>
                                    <option>In Person</option>
                                    <option>Online</option>
                                </select>
                            </div>

                            <!-- FREE option -->
                            <div id="freeOptionBox">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex bg-light p-3 gap-2">
                                            <div class="item w-50">
                                                Optionally select an existing Event Profile to inherit its settings for this event, or create a new one. You can modify individual inherited settings after the event is created.
                                            </div>
                                            <div class="item w-50">
                                                <label class="form-label">Event Profile</label>
                                                <select class="form-select">
                                                    <option selected disabled>Select Event Profile</option>
                                                    <option>Create Event New Profile</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-between align-items-center my-4">
                                            <div class="item">
                                                <h4>Tickets</h4>
                                            </div>
                                            <div class="item">
                                                <button class="btn btn-theme" data-bs-toggle="modal" data-bs-target="#newTicket"> New Tickets</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="ticket">
                                            <div class="soldout-tag">SOLD OUT</div>
                                            <div class="ticket-left">
                                                <div class="event-tag">FREE PASS</div>
                                                <h4>Community Ticket</h4>
                                                <p class="date">May 17 - May 17, 2026</p>

                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <label class="custom-checkbox">
                                                            <input type="checkbox" name="soldout">
                                                            <span class="checkmark"></span>
                                                            Sold Out
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <button class="text-white text-decoration-none TicketBtn" data-bs-toggle="modal" data-bs-target="#newTicket"><i class="ri-pencil-line"></i> Edit</button> &nbsp;
                                                        <button class="text-white text-decoration-none TicketBtn" data-bs-toggle="modal" data-bs-target="#deleteTicket"><i class="ri-delete-bin-line"></i> Delete</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ticket-divider"></div>

                                            <div class="ticket-right">
                                                <div class="qr-box">
                                                    <img src="assets/img/qr.jpg" alt="">
                                                </div>
                                                <p>Scan at Entry</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <!-- PAID option -->
                            <div id="paidOptionBox">
                                <div class="col-md-6" id="currencyInput">
                                    <label class="form-label">Currency <span class="text-danger">*</span></label>
                                    <select class="form-select">
                                        <option selected disabled>Select Currency</option>
                                        <option value="INR">₹ INR - Indian Rupee</option>
                                        <option value="USD">$ USD - US Dollar</option>
                                        <option value="EUR">€ EUR - Euro</option>
                                        <option value="GBP">£ GBP - British Pound</option>
                                        <option value="AED">د.إ AED - UAE Dirham</option>
                                        <option value="AUD">$ AUD - Australian Dollar</option>
                                        <option value="CAD">$ CAD - Canadian Dollar</option>
                                        <option value="JPY">¥ JPY - Japanese Yen</option>
                                        <option value="SGD">$ SGD - Singapore Dollar</option>
                                        <option value="CNY">¥ CNY - Chinese Yuan</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex bg-light p-3 my-3 mx-2 gap-2">
                                            <div class="item w-50">
                                                Optionally select an existing Event Profile to inherit its settings for this event, or create a new one. You can modify individual inherited settings after the event is created.
                                            </div>
                                            <div class="item w-50">
                                                <label class="form-label">Event Profile</label>
                                                <select class="form-select">
                                                    <option selected disabled>Select Event Profile</option>
                                                    <option>Create Event New Profile</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-theme">
                                    Create Event
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- newTicketModal -->
    <div class="modal" id="newTicket">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title">Create New Ticket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST">
                        <div class="row g-3">

                            <!-- Ticket Name -->
                            <div class="col-md-4">
                                <label class="form-label">Ticket Name *</label>
                                <input type="text" class="form-control" placeholder="Enter ticket name">
                            </div>

                            <!-- Opens On -->
                            <div class="col-md-4">
                                <label class="form-label">Opens On *</label>
                                <input type="datetime-local" class="form-control">
                            </div>

                            <!-- Ends On -->
                            <div class="col-md-4">
                                <label class="form-label">Ends On *</label>
                                <input type="datetime-local" class="form-control">
                            </div>

                            <!-- Ticket Type -->
                            <div class="col-md-4">
                                <label class="form-label">Ticket Type *</label>
                                <select class="form-select" id="ticketType">
                                    <option selected disabled>Select Type</option>
                                    <option value="free">Free</option>
                                    <option value="paid">Paid</option>
                                </select>
                            </div>

                            <!-- Currency & Price -->
                            <div class="col-md-4" id="priceBox">
                                <label class="form-label">Currency & Price *</label>
                                <div class="input-group">
                                    <select class="form-select" style="max-width:110px;">
                                        <option>₹ INR</option>
                                        <option>$ USD</option>
                                        <option>€ EUR</option>
                                        <option>£ GBP</option>
                                    </select>
                                    <input type="number" class="form-control" placeholder="Price">
                                </div>
                            </div>

                            <!-- Maximum Limit -->
                            <div class="col-md-4">
                                <label class="form-label">Maximum Limit *</label>
                                <input type="number" class="form-control" placeholder="Enter limit">
                            </div>

                            <!-- Description -->
                            <div class="col-md-12">
                                <label class="form-label">Description *</label>
                                <textarea class="form-control" rows="7" placeholder="Enter description"></textarea>
                            </div>

                            <!-- Checkboxes -->
                            <div class="col-md-12">
                                <div class="d-flex gap-4 flex-wrap">

                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="soldout">
                                        <span class="checkmark"></span>
                                        Sold Out
                                    </label>

                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="hideTicket">
                                        <span class="checkmark"></span>
                                        Hide Ticket
                                    </label>

                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="waitlist">
                                        <span class="checkmark"></span>
                                        Enable Waitlist
                                    </label>

                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="col-md-12 text-end mt-3">
                                <button class="btn btn-outline-secondary">Close</button>
                                <button class="btn btn-theme">Create</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- deleteTicketModal -->
    <div class="modal" id="deleteTicket">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body text-center">
                    <i class="ri-error-warning-line ri-5x text-danger"></i>
                    <h2 class="text-danger fw-bold">Delete Ticket</h2>
                    <p>Are you sure you want to delete the ticket?</p>
                    <button class="btn btn-outline-secondary">Close</button>
                    <button class="btn btn-theme">Create</button>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {

            $("#freePaid").on('change', function() {
                var optionValue = $(this).val();

                // dono div hide
                $('#freeOptionBox, #paidOptionBox').hide();

                // selected option ke hisaab se show
                if (optionValue === "free") {
                    $('#freeOptionBox').show();
                } else if (optionValue === "paid") {
                    $('#paidOptionBox').show();
                    $('#paidOptionBox').css('display', 'contents');

                }
            });

            // soldouttag
            $('input[name="soldout"]').on('change', function() {
                let ticket = $(this).closest('.ticket');

                if ($(this).is(':checked')) {
                    ticket.find('.soldout-tag').show();
                } else {
                    ticket.find('.soldout-tag').hide();
                }
            });

        });
    </script>
</body>

</html>
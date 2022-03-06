@extends('layouts.app')

@section('contents')
    <!-- Location -->
    <div id="msform" onsubmit="formSubmit()" class="msform">
        <ul class="overview-list step-list">
            <li class="list active" id="account">
                <a class="list-click" href="javascript:void(0)">
                    <span class="list-number">1</span>
                    Location
                </a>
            </li>
            <li class="list">
                <a class="list-click" href="javascript:void(0)">
                    <span class="list-number">2</span>
                    Service
                </a>
            </li>
            <li class="list">
                <a class="list-click" href="javascript:void(0)">
                    <span class="list-number">3</span> Date & Time
                </a>
            </li>
            <li class="list">
                <a class="list-click" href="javascript:void(0)">
                    <span class="list-number">4</span>
                    Information
                </a>
            </li>
            <li class="list">
                <a class="list-click" href="javascript:void(0)">
                    <span class="list-number">5</span>
                    Confirmation
                </a>
            </li>
        </ul>
        <!-- Location -->
        <fieldset class="padding-top-50 padding-bottom-100">
            <div class="overview-list-all">
                <div id="overview-location" class="overview-location">
                    <div
                        data-city="New York"
                        data-state="New York"
                        class="single-location active margin-top-30 wow fadeInUp"
                        data-wow-delay=".3s"
                    >
                        <span class="location"> New York, </span>
                        <span class="location"> New York </span>
                    </div>
                    <div
                        class="single-location margin-top-30 wow fadeInDown"
                        data-wow-delay=".3s"
                        data-city="Los Angeles"
                        data-state="California"
                    >
                        <span class="location"> Los Angeles, </span>
                        <span class="location"> California </span>
                    </div>
                    <div
                        class="single-location margin-top-30 wow fadeInUp"
                        data-wow-delay=".3s"
                        data-city="Chicago"
                        data-state="New York"
                    >
                        <span class="location"> Chicago, </span>
                        <span class="location"> New York </span>
                    </div>
                    <div
                        class="single-location margin-top-30 wow fadeInDown"
                        data-wow-delay=".3s"
                        data-city="Houston"
                        data-state="Texas"
                    >
                        <span class="location"> Houston, </span>
                        <span class="location"> Texas </span>
                    </div>
                    <div
                        class="single-location margin-top-30 wow fadeInUp"
                        data-wow-delay=".3s"
                        data-city="Phoenix"
                        data-state="Arizona"
                    >
                        <span class="location"> Phoenix, </span>
                        <span class="location"> Arizona </span>
                    </div>
                </div>
            </div>
            <!-- Contact Map Starts -->
            <div class="contact-map-area padding-top-100">
                <div class="container">
                    <div class="contact-map">
                      <span class="select-location">
                        Select Current Location
                      </span>
                        <iframe
                            src="https://www.openstreetmap.org/export/embed.html?bbox=82.83142089843751%2C22.243344409235693%2C92.00500488281251%2C26.652368294008866&amp;layer=mapnik"
                        ></iframe>
                    </div>
                </div>
            </div>
            <!-- Contact Map end -->
            <input
                type="button"
                id="locationNextBtn"
                name="next"
                class="next action-button"
                value="Next"
            />
        </fieldset>
        <!-- Service -->
        <fieldset class="padding-top-50 padding-bottom-100">
            <div class="row">
                <div class="col-lg-8 margin-top-30">
                    <div class="service-overview-wrapper padding-bottom-30">
                        <div class="overview-author overview-author-border">
                            <div class="overview-flex-author">
                                <div class="overview-thumb">
                                    <img
                                        src="assets/img/service/overview1.jpg"
                                        alt=""
                                    />
                                </div>
                                <div class="overview-contents">
                                    <h4 class="overview-title">
                                        <a href="javascript:void(0)">
                                            Lorem ipsum dolor sit amet, consectetur
                                            adipiscing about Aelit</a
                                        >
                                    </h4>
                                    <span class="overview-review">
                              <i class="las la-star"></i>
                              4.9 <b>(231)</b>
                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="overview-single padding-top-40">
                            <h4 class="title">What's Included</h4>
                            <div class="include-contents margin-top-30">
                                <div class="single-include">
                                    <ul class="include-list">
                                        <li class="lists">
                                            <div class="list-single">
                                                <span class="rooms"> 3 Bed Room </span>
                                            </div>
                                            <div class="list-single">
                                                <span class="values"> $30 </span>
                                                <span class="value-input">
                                    <input
                                        id="static-bedroom-input"
                                        type="number"
                                        value="3"
                                        min="1"
                                    />
                                  </span>
                                            </div>
                                        </li>
                                        <li class="lists">
                                            <a class="remove" href="javascript:void(0)"
                                            >Remove</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                                <div class="single-include">
                                    <ul class="include-list">
                                        <li class="lists">
                                            <div class="list-single">
                                                <span class="rooms"> 2 Bath Room </span>
                                            </div>
                                            <div class="list-single">
                                                <span class="values"> $20 </span>
                                                <span class="value-input">
                                    <input
                                        type="number"
                                        id="static-bathroom-input"
                                        value="2"
                                        min="1"
                                    />
                                  </span>
                                            </div>
                                        </li>
                                        <li class="lists">
                                            <a class="remove" href="javascript:void(0)"
                                            >Remove</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="overview-single padding-top-60">
                            <h4 class="title">Upgrade your order with extras</h4>
                            <div class="row">
                                <div class="col-lg-6 margin-top-30">
                                    <div class="overview-extra">
                                        <div class="checkbox-inlines">
                                            <input
                                                class="check-input"
                                                type="checkbox"
                                                id="check4"
                                            />
                                            <label class="checkbox-label" for="check4">
                                                Kitchen
                                            </label>
                                        </div>
                                        <div class="overview-extra-flex-content">
                                            <div class="list-single">
                                                <span class="values"> $50 </span>
                                                <span class="value-input">
                                    <input
                                        type="number"
                                        value="0"
                                        id="kitchen-extra-service"
                                        min="0"
                                    />
                                  </span>
                                            </div>
                                            <span
                                                class="price-value"
                                                id="kitchen-extra-total-price"
                                            >
                                  $50
                                </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 margin-top-30">
                                    <div class="overview-extra">
                                        <div class="checkbox-inlines">
                                            <input
                                                class="check-input"
                                                type="checkbox"
                                                id="check5"
                                            />
                                            <label class="checkbox-label" for="check5">
                                                Fridge
                                            </label>
                                        </div>
                                        <div class="overview-extra-flex-content">
                                            <div class="list-single">
                                                <span class="values"> $20 </span>
                                                <span class="value-input">
                                    <input
                                        type="number"
                                        value="0"
                                        min="0"
                                        id="fridge-extra-service"
                                    />
                                  </span>
                                            </div>
                                            <span
                                                class="price-value"
                                                id="fridge-extra-total-price"
                                            >
                                  $20
                                </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 margin-top-30">
                                    <div class="overview-extra">
                                        <div class="checkbox-inlines">
                                            <input
                                                class="check-input"
                                                type="checkbox"
                                                id="check6"
                                            />
                                            <label class="checkbox-label" for="check6">
                                                Garden
                                            </label>
                                        </div>
                                        <div class="overview-extra-flex-content">
                                            <div class="list-single">
                                                <span class="values"> $60 </span>
                                                <span class="value-input">
                                    <input
                                        type="number"
                                        value="0"
                                        min="0"
                                        id="garden-extra-service"
                                    />
                                  </span>
                                            </div>
                                            <span
                                                class="price-value"
                                                id="garden-extra-total-price"
                                            >
                                  $60
                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overview-single padding-top-60">
                            <h4 class="title">Benifits of the Package:</h4>
                            <ul class="overview-benefits margin-top-30">
                                <li class="list">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Sed a egestas leo.
                                </li>
                                <li class="list">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Sed a egestas leo.
                                </li>
                                <li class="list">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Sed a egestas leo.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 margin-top-30">
                    <div class="service-overview-summery">
                        <h4 class="title">Booking Summery</h4>
                        <div class="overview-summery-contents">
                            <div class="single-summery">
                          <span class="summery-title">
                            Appointment Package Service
                          </span>
                                <div class="summery-list-all">
                                    <ul class="summery-list">
                                        <li class="list">
                                            <span class="rooms"> Bed Room</span>
                                            <span
                                                class="room-count"
                                                id="bedroom-summery-count"
                                            >3</span
                                            >
                                            <span
                                                class="value-count"
                                                id="bedroom-summery-total"
                                            >$90</span
                                            >
                                        </li>
                                        <li class="list">
                                            <span class="rooms"> Bath Room</span>
                                            <span
                                                class="room-count"
                                                id="bathroom-summery-count"
                                            >2</span
                                            >
                                            <span
                                                id="bathroom-summery-total"
                                                class="value-count"
                                            >$40</span
                                            >
                                        </li>
                                    </ul>
                                    <ul class="summery-result-list">
                                        <li class="result-list">
                                            <span class="rooms"> Package Fee</span>
                                            <span class="value-count" id="package-fee"
                                            >$130</span
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-summery">
                                <span class="summery-title"> Extra Service </span>
                                <div class="summery-list-all">
                                    <ul class="summery-list" id="extra-summery-2">
                                        <li class="list">
                                            <span class="rooms"> Kitchen</span>
                                            <span
                                                class="room-count"
                                                id="kitchen-count-extra-summery2"
                                            >0</span
                                            >
                                            <span
                                                class="value-count"
                                                id="kitchen-total-extra-summery2"
                                            >$0</span
                                            >
                                        </li>
                                        <li class="list">
                                            <span class="rooms"> Fridge</span>
                                            <span
                                                class="room-count"
                                                id="fridge-count-extra-summery2"
                                            >0</span
                                            >
                                            <span
                                                class="value-count"
                                                id="fridge-total-extra-summery2"
                                            >$0</span
                                            >
                                        </li>
                                        <li class="list">
                                            <span class="rooms"> Garden</span>
                                            <span
                                                class="room-count"
                                                id="garden-count-extra-summery2"
                                            >0</span
                                            >
                                            <span
                                                class="value-count"
                                                id="garden-total-extra-summery2"
                                            >$0</span
                                            >
                                        </li>
                                    </ul>
                                    <ul
                                        class="summery-result-list result-border padding-bottom-20"
                                    >
                                        <li class="result-list">
                                            <span class="rooms"> Subtotal</span>
                                            <span class="value-count" id="subtotal-summery2"
                                            >$130</span
                                            >
                                        </li>
                                    </ul>
                                    <ul
                                        class="summery-result-list result-border padding-bottom-20"
                                    >
                                        <li class="result-list">
                                            <span class="rooms"> Tax(+)15%</span>
                                            <span class="value-count" id="tax-summery2"
                                            >$19.5</span
                                            >
                                        </li>
                                    </ul>
                                    <ul class="summery-result-list">
                                        <li class="result-list">
                                <span class="rooms">
                                  <strong>Total</strong></span
                                >
                                            <span class="value-count" id="total-summery2"
                                            >$149.5</span
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-wrapper">
                                <a
                                    href="javascript:void(0)"
                                    class="cmn-btn btn-appoinment btn-bg-1"
                                >
                                    Continue
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input
                type="button"
                name="next"
                class="next action-button"
                value="Next"
            />
            <input
                type="button"
                name="previous"
                class="previous action-button-previous"
                value="Previous"
            />
        </fieldset>
        <!-- Date & Time -->
        <fieldset class="padding-top-50 padding-bottom-100">
            <div class="date-overview">
                <div class="single-date-overview margin-top-30">
                    <h4 class="date-time-title" id="booking-date"></h4>
                    <ul
                        class="date-time-list margin-top-20"
                        id="next-five-day-list"
                    ></ul>
                </div>
                <div class="single-date-overview margin-top-30">
                    <h4 class="date-time-title" id="booking-time">
                        Available schedule on 06 September, 2021
                    </h4>
                    <ul
                        id="booking-date-time"
                        class="date-time-list margin-top-20"
                    >
                        <li class="list active">
                            <a href="javascript:void(0)"> 10.00AM-11.00AM </a>
                        </li>
                        <li class="list">
                            <a href="javascript:void(0)"> 12.00AM-01.00PM </a>
                        </li>
                        <li class="list">
                            <a href="javascript:void(0)"> 04.00AM-05.00AM </a>
                        </li>
                        <li class="list">
                            <a href="javascript:void(0)"> 06.00AM-07.00AM </a>
                        </li>
                    </ul>
                </div>
                <div class="btn-wrapper margin-top-30">
                    <a href="javascript:void(0)" class="cmn-btn btn-bg-1"
                    >Book Appoinmnent</a
                    >
                </div>
            </div>
            <input
                type="button"
                name="next"
                class="next action-button"
                value="Next"
            />
            <input
                type="button"
                name="previous"
                class="previous action-button-previous"
                value="Previous"
            />
        </fieldset>
        <!-- Information -->
        <fieldset class="padding-top-50 padding-bottom-100">
            <div class="Info-overview padding-top-30">
                <h3 class="date-time-title">Booking Information</h3>
                <div class="single-info-overview margin-top-30">
                    <div class="single-info-input">
                        <label class="info-title"> Your Name* </label>
                        <input
                            class="form--control"
                            type="text"
                            name="name"
                            id="name"
                            placeholder="Type Your Name"
                            required
                        />
                    </div>
                    <div class="single-info-input">
                        <label class="info-title"> Your Email* </label>
                        <input
                            class="form--control"
                            type="email"
                            name="email"
                            id="email"
                            placeholder="Type Your Email"
                            required
                        />
                    </div>
                </div>
                <div class="single-info-overview margin-top-30">
                    <div class="single-info-input">
                        <label class="info-title"> Phone Number* </label>
                        <input
                            class="form--control"
                            type="tel"
                            id="number"
                            placeholder="Type Your Number"
                            required
                        />
                    </div>
                    <div class="single-info-input">
                        <label class="info-title"> Your City* </label>
                        <select onchange="cityValueFunc(this)" id="city" required>
                            <option value="New York">New York</option>
                            <option value="London">London</option>
                            <option value="Eden Garden">Eden Garden</option>
                            <option value="Paris">Paris</option>
                            <option value="Barcelona">Barcelona</option>
                        </select>
                    </div>
                </div>
                <div class="single-info-overview margin-top-30">
                    <div class="single-info-input">
                        <label class="info-title"> Your Area* </label>
                        <input
                            class="form--control"
                            type="text"
                            id="area"
                            placeholder="Type Your Area"
                            required
                        />
                    </div>
                    <div class="single-info-input">
                        <label class="info-title"> Post Code* </label>
                        <input
                            class="form--control"
                            type="number"
                            id="post-code"
                            placeholder="Type Post Code"
                            required
                        />
                    </div>
                </div>

                <div class="single-info-overview margin-top-30">
                    <div class="single-info-input">
                        <label class="info-title"> Your Address* </label>
                        <input
                            class="form--control"
                            type="text"
                            id="address"
                            placeholder="Type Your Address"
                            required
                        />
                    </div>
                </div>
                <div class="single-info-overview margin-top-30">
                    <div class="single-info-input">
                        <label class="info-title"> Order Note* </label>
                        <textarea
                            class="form--control textarea--form"
                            name="message"
                            id="order-note"
                            placeholder="Type Order Note"
                            required
                        ></textarea>
                    </div>
                </div>
                <div class="btn-wrapper margin-top-35">
                    <button type="submit" class="cmn-button btn-bg-1">
                        Continue
                    </button>
                </div>
            </div>
            <input
                type="button"
                name="next"
                class="next action-button"
                value="Next"
            />
            <input
                type="button"
                name="previous"
                class="previous action-button-previous"
                value="Previous"
            />
        </fieldset>
        <!-- Confirmation -->
        <fieldset class="padding-top-50 padding-bottom-100">
            <div class="confirm-overview padding-top-30">
                <div class="overview-author overview-author-border">
                    <div class="overview-flex-author">
                        <div class="overview-thumb confirm-thumb">
                            <img src="assets/img/service/overview1.jpg" alt="" />
                        </div>
                        <div class="overview-contents">
                            <h2 class="overview-title confirm-title">
                                <a href="javascript:void(0)"
                                >Lorem ipsum dolor sit amet, consectetur adipiscing
                                    about Aelit</a
                                >
                            </h2>
                            <span class="overview-review">
                          <i class="las la-star"></i>
                          4.9 <b>(231)</b>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="confirm-overview-left margin-top-30">
                        <div class="single-confirm-overview">
                            <div class="single-confirm margin-top-30">
                                <h3 class="titles">Location</h3>
                                <span class="details" id="location-city5">
                            Los Angeles,
                          </span>
                                <span class="details" id="location-state5">
                            California
                          </span>
                            </div>
                            <div class="single-confirm margin-top-30">
                                <h3 class="titles">Date & Time</h3>
                                <span class="details" id="selected-date5">
                            06 Sep 2021
                          </span>
                                <span class="details" id="selected-time5">
                            6:00PM-7:00PM
                          </span>
                            </div>
                        </div>
                        <div class="booking-info padding-top-60">
                            <h2 class="title">Booking Information</h2>
                            <div class="booking-details">
                                <ul class="booking-list">
                                    <li class="lists">
                                        <span class="list-span"> Name: </span>
                                        <span id="show-name-field" class="list-strong">
                                Jhon Dhoe
                              </span>
                                    </li>
                                    <li class="lists">
                                        <span class="list-span"> Email: </span>
                                        <span id="show-email-field" class="list-strong">
                                Customer@mail.com
                              </span>
                                    </li>
                                    <li class="lists">
                                        <span class="list-span"> Phone: </span>
                                        <span id="show-number-field" class="list-strong">
                                011-2234567890
                              </span>
                                    </li>
                                    <li class="lists">
                                        <span class="list-span"> City: </span>
                                        <span id="show-city-field" class="list-strong">
                                New york
                              </span>
                                    </li>
                                    <li class="lists">
                                        <span class="list-span"> Area: </span>
                                        <span id="show-area-field" class="list-strong">
                                New york
                              </span>
                                    </li>
                                    <li class="lists">
                                        <span class="list-span"> Post Code: </span>
                                        <span
                                            id="show-post-code-field"
                                            class="list-strong"
                                        >
                                1122
                              </span>
                                    </li>
                                    <li class="lists">
                                        <span class="list-span"> Address: </span>
                                        <span id="show-address-field" class="list-strong">
                                2608 Ritter Avenue Livonia, MI 48150
                              </span>
                                    </li>
                                    <li class="lists">
                                        <span class="list-span"> Order Note: </span>
                                        <span
                                            id="show-order-note-field"
                                            class="list-strong"
                                        >
                                it is a long established fact that a reader will
                                be distra by the readable content of a page when
                                looking at its layout. The point of using Lorem
                                Ipsum is that.
                              </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 margin-top-60">
                    <div class="service-overview-summery">
                        <h4 class="title">Booking Summery</h4>
                        <div class="overview-summery-contents">
                            <div class="single-summery">
                          <span class="summery-title">
                            Appointment Service
                          </span>
                                <div class="summery-list-all">
                                    <ul class="summery-list">
                                        <li class="list">
                                            <span class="rooms"> Bed Room</span>
                                            <span
                                                id="bedroom-count-page5"
                                                class="room-count"
                                            >3</span
                                            >
                                            <span
                                                id="bedroom-cost-page5"
                                                class="value-count"
                                            >$90</span
                                            >
                                        </li>
                                        <li class="list">
                                            <span class="rooms"> Bath Room</span>
                                            <span
                                                id="bathroom-count-page5"
                                                class="room-count"
                                            >2</span
                                            >
                                            <span
                                                id="bathroom-cost-page5"
                                                class="value-count"
                                            >$40</span
                                            >
                                        </li>
                                    </ul>
                                    <ul class="summery-result-list">
                                        <li class="result-list">
                                            <span class="rooms"> Appoinment Fee</span>
                                            <span id="package-fee-page5" class="value-count"
                                            >$130</span
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-summery">
                                <span class="summery-title"> Extra Service </span>
                                <div class="summery-list-all">
                                    <ul
                                        class="summery-list"
                                        id="extra-service-list-summery"
                                    >
                                        <li class="list">
                                            <span class="rooms"> Kitchen</span>
                                            <span
                                                id="kitchen-count-extra-summery5"
                                                class="room-count"
                                            >0</span
                                            >
                                            <span
                                                id="kitchen-total-extra-summery5"
                                                class="value-count"
                                            >$0</span
                                            >
                                        </li>
                                        <li class="list">
                                            <span class="rooms"> Fridge</span>
                                            <span
                                                id="fridge-count-extra-summery5"
                                                class="room-count"
                                            >0</span
                                            >
                                            <span
                                                id="fridge-total-extra-summery5"
                                                class="value-count"
                                            >$0</span
                                            >
                                        </li>
                                        <li class="list">
                                            <span class="rooms"> Garden</span>
                                            <span
                                                id="garden-count-extra-summery5"
                                                class="room-count"
                                            >0</span
                                            >
                                            <span
                                                id="garden-total-extra-summery5"
                                                class="value-count"
                                            >$0</span
                                            >
                                        </li>
                                    </ul>
                                    <ul
                                        class="summery-result-list result-border padding-bottom-20"
                                    >
                                        <li class="result-list">
                                            <span class="rooms"> Subtotal</span>
                                            <span id="subtotal-summery5" class="value-count"
                                            >$130</span
                                            >
                                        </li>
                                    </ul>
                                    <ul
                                        class="summery-result-list result-border padding-bottom-20"
                                    >
                                        <li class="result-list">
                                            <span class="rooms"> Tax(+)15%</span>
                                            <span id="tax-summery5" class="value-count"
                                            >$19.5</span
                                            >
                                        </li>
                                    </ul>
                                    <ul class="summery-result-list">
                                        <li class="result-list">
                                <span class="rooms">
                                  <strong>Total</strong></span
                                >
                                            <span id="total-summery5" class="value-count"
                                            >$149.5</span
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="confirm-bottom-content">
                                <div class="confirm-payment payment-border">
                                    <div class="single-checkbox">
                                        <div class="checkbox-inlines">
                                            <input
                                                class="check-input"
                                                type="checkbox"
                                                id="check1"
                                            />
                                            <label class="checkbox-label" for="check1">
                                                Cash Payment
                                            </label>
                                        </div>
                                    </div>
                                    <div class="single-checkbox">
                                        <div class="checkbox-inlines">
                                            <input
                                                class="check-input"
                                                type="checkbox"
                                                id="check2"
                                            />
                                            <label class="checkbox-label" for="check2">
                                                <img
                                                    src="assets/img/service/payment.png"
                                                    alt=""
                                                />
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="checkbox-inlines bottom-checkbox">
                                    <input
                                        class="check-input"
                                        type="checkbox"
                                        id="check3"
                                    />
                                    <label class="checkbox-label" for="check3">
                                        I have read and agree to the website
                                        <a href="javascript:void(0)">
                                            terms and conditions *
                                        </a>
                                    </label>
                                </div>
                            </div>
                            <div class="p-2 bg-warning" id="credentials">
                                <p class="text-dark" style="font-size: 13px">Email: <span class="font-weight-bold">sb-8fbfe14286457@personal.example.com</span></p>
                                <br>
                                <p class="text-dark" style="font-size: 13px">Password: <span class="font-weight-bold">2%"^.t"N</span></p>
                            </div>
                            <div class="btn-wrapper">
                                <div id="paypal-button-container"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input
                type="button"
                name="submit"
                class="next action-button"
                value="Submit"
                id="submit"
            />
            <input
                type="button"
                name="previous"
                class="previous action-button-previous"
                value="Previous"
            />
        </fieldset>
        <!-- Successful Complete -->
        <fieldset class="padding-top-80 padding-bottom-100">
            <div class="form-card successful-card">
                <h2 class="title-step">SUCCESS !</h2>
                <div class="succcess-icon">
                    <i class="las la-check"></i>
                </div>
                <h5 class="purple-text text-center">
                    You Have Successfully Signed Up
                </h5>
                <div class="btn-wrapper text-center margin-top-35">
                    <a href="index.html" class="cmn-btn btn-bg-1">
                        Back To Home</a
                    >
                </div>
            </div>
        </fieldset>
    </div>
@endsection

@extends('layouts.index')
<section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
                    </div>
                    <p>Donec pretium est orci, non vulputate arcu hendrerit a. Fusce a eleifend riqsie, namei sollicitudin urna diam, sed commodo purus porta ut.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="phone">
                                <em class="fa fa-phone"></em>
                                <h4>Phone Numbers</h4>
                                <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message">
                                <em class="fa fa-envelope"></em>
                                <h4>Emails</h4>
                                <span><a href="#">hello@company.com</a><br><a href="#">info@company.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form id="contact" action="" method="post">
                      <div class="row">
                        <div class="col-lg-12">
                            <h4>Table Reservation</h4>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                              <legend>Personalia:</legend>
                            <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                          </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                              <legend>Personalia:</legend>
                          <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                        </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                              <legend>Personalia:</legend>
                            <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                              <legend>Personalia:</legend>
                            <select value="number-guests" name="number-guests" id="number-guests">
                                <option value="number-guests">Number Of Guests</option>
                                <option  id="1">1</option>
                                <option  id="2">2</option>
                                <option  id="3">3</option>
                                <option  id="4">4</option>
                                <option  id="5">5</option>
                                <option  id="6">6</option>
                                <option  id="7">7</option>
                                <option  id="8">8</option>
                                <option  id="9">9</option>
                                <option  id="10">10</option>
                                <option  id="11">11</option>
                                <option  id="12">12</option>
                            </select>
                          </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <div id="filterDate2">
                              <div class="input-group date" data-date-format="dd/mm/yyyy">
                                <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                <div class="input-group-addon" >
                                  <span class="glyphicon glyphicon-th"></span>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                              <legend>Personalia:</legend>
                            <select value="time" name="time" id="time">
                                <option value="time">Time</option>
                                <option id="Breakfast">Breakfast</option>
                                <option id="Lunch">Lunch</option>
                                <option id="Dinner">Dinner</option>
                            </select>
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                              <legend>Personalia:</legend>
                            <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                              <legend>Personalia:</legend>
                            <button type="submit" id="form-submit" class="main-button-icon">Make A Reservation</button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

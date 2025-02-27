   <!-- START - Filter Modal -->
   <div class="bbt-modal" id="filter" style="display:none;">
    <div class="bbtmodal-cntnr">
        <div class="resetfltrbtn">Reset</div>
        <div class="bbtmodal-clsbtn"></div>
        <div class="bbtmodal-cntnt-grp">
            <form method="post" action="{{url('/search/byfilter')}}" class="bbtmodal-form">
                @csrf
                <fieldset>
                    <label>Registration Year</label>
                    <ul class="radioinput-list">
                        <li>
                            <input type="radio" name="registration" id="regtnnum2000-2010" value="2000-2010">
                            <label for="regtnnum2000-2010">2000 - 2010</label>
                        </li>
                        <li>
                            <input type="radio" name="registration" id="regtnnum2010-2015" value="2010-2015">
                            <label for="regtnnum2010-2015">2010 - 2015</label>
                        </li>
                        <li>
                            <input type="radio" name="registration" id="regtnnum2015-2020" value="2015-2020">
                            <label for="regtnnum2015-2020">2015 - 2020</label>
                        </li>
                        <li>
                            <input type="radio" name="registration" id="regtnnumall" value="2000-2022">
                            <label for="regtnnumall">All</label>
                        </li>
                    </ul>
                </fieldset>
                <fieldset>
                    <label>KMS Driven</label>
                    <ul class="checkboxinput-list">
                        <li>
                            <input type="checkbox" name="kms" id="kms-brandnew" value="0-0">
                            <label for="kms-brandnew">Brand New</label>
                        </li>
                        <li>
                            <input type="checkbox" name="kms" id="kms0-5000" value="0-5000">
                            <label for="kms0-5000">0 - 5000</label>
                        </li>
                        <li>
                            <input type="checkbox" name="kms" id="kms5000-10000" value="5000-10000">
                            <label for="kms5000-10000">5000 - 10000</label>
                        </li>
                        <li>
                            <input type="checkbox" name="kms" id="kms10000-15000" value="10000-15000">
                            <label for="kms10000-15000">10000 - 15000</label>
                        </li>
                        <li>
                            <input type="checkbox" name="kms" id="kms15000-20000" value="15000-20000">
                            <label for="kms15000-20000">15000 - 20000</label>
                        </li>
                        <li>
                            <input type="checkbox" name="kms" id="kms20000above" value="20000-50000">
                            <label for="kms20000above">20000 & Above</label>
                        </li>
                    </ul>
                </fieldset>
                <fieldset>
                    <label>Budget</label>
                    <ul class="radioinput-list">
                        <li>
                            <input type="radio" name="price" id="bdgt-lsthn50l" value="1-5000000">
                            <label for="bdgt-lsthn50l">Less Than 50L</label>
                        </li>
                        <li>
                            <input type="radio" name="price" id="bdgt-50l-1cr" value="5000000-10000000">
                            <label for="bdgt-50l-1cr">50L  to 1Cr</label>
                        </li>
                        <li>
                            <input type="radio" name="price" id="bdgt-1cr-1.5cr" value="10000000-15000000">
                            <label for="bdgt-1cr-1.5cr">1Cr to 1.5Cr</label>
                        </li>
                        <li>
                            <input type="radio" name="price" id="bdgt-1.5cr-above" value="15000000-50000000">
                            <label for="bdgt-1.5cr-above">1.5Cr & Above</label>
                        </li>
                    </ul>
                </fieldset>
               <!--  <fieldset>
                    <label>Body Type</label>
                    <ul class="radioinput-list bodytype">
                        <li>
                            <input type="radio" name="style" id="bdytype-SUV" value="suv">
                            <label for="bdytype-SUV" style="background-image:url('https://cdn.bigboytoyz.com/new-version/styles/fltrbdytype-suv.png');">
                                SUV                                   
                            </label>
                        </li>
                        <li>
                            <input type="radio" name="style" id="bdytype-Sedan" value="sedan">
                            <label for="bdytype-Sedan" style="background-image:url('https://cdn.bigboytoyz.com/new-version/styles/fltrbdytype-sedan.png');">
                                Sedan                                 
                            </label>
                        </li>
                        <li>
                            <input type="radio" name="style" id="bdytype-Convertible" value="convertible">
                            <label for="bdytype-Convertible" style="background-image:url('https://cdn.bigboytoyz.com/new-version/styles/fltrbdytype-convertible.png');">
                                Convertible                               
                            </label>
                        </li>
                        <li>
                            <input type="radio" name="style" id="bdytype-Coupe" value="coupe">
                            <label for="bdytype-Coupe" style="background-image:url('https://cdn.bigboytoyz.com/new-version/styles/fltrbdytype-coupe.png');">
                                Coupe                                   
                            </label>
                        </li>
                        <li>
                            <input type="radio" name="style" id="bdytype-Sports" value="sports">
                            <label for="bdytype-Sports" style="background-image:url('https://cdn.bigboytoyz.com/new-version/styles/fltrbdytype-sports.png');">
                                Sports                                 
                            </label>
                        </li>
                        <li>
                            <input type="radio" name="style" id="bdytype-MUV-MPV" value="muv-mpv">
                            <label for="bdytype-MUV-MPV" style="background-image:url('https://cdn.bigboytoyz.com/new-version/styles/fltrbdytype-muv-mpv.png');">
                                MUV-MPV                                   
                            </label>
                        </li>
                        <li>
                            <input type="radio" name="style" id="bdytype-Hatchback" value="hatchback">
                            <label for="bdytype-Hatchback" style="background-image:url('https://cdn.bigboytoyz.com/new-version/styles/fltrbdytype-hatchback.png');">
                                Hatchback                                  
                            </label>
                        </li>
                    </ul>
                </fieldset> -->
                <fieldset>
                    <label>Brand</label>
                    <div class="inputgrp slctinput">
                        <select name="brand" onchange="this.form.submit()">
                            <option value="">Select Brand</option>
                                                    <option value="audi">Audi</option>
                                                    <option value="bmw">BMW</option>
                                                    <option value="jaguar">Jaguar</option>
                                                    <option value="land-rover">Land Rover</option>
                                                    <option value="nissan">Nissan</option>
                                                    <option value="toyota">Toyota</option>
                                                    <option value="volvo">Volvo</option>
                                                    <option value="mazda">Mazda</option>
                                                    <option value="mercedes benz">Mercedes Benz</option>
                                                    <option value="lotus">Lotus</option>
                                                    <option value="bentley">Bentley</option>
                                                    <option value="porsche">Porsche</option>
                                                    <option value="ssangyong">Ssangyong</option>
                                                    <option value="volkswagen">Volkswagen</option>

                                                </select>
                    </div>
                </fieldset>
                <button type="submit" class="frmbtn">Apply Filter</button>
            </form>
        </div>
    </div>
</div>

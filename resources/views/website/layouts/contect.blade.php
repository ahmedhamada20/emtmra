
<noscript>
    <iframe src="" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<!-- End Google Tag Manager (noscript) -->

<div class="wmBox_overlay">
    <div class="wmBox_centerWrap">
        <div class="wmBox_centerer">
            <div class="wmBox_contentWrap">
                <div class="wmBox_scaleWrap">
                    <div class="wmBox_closeBtn">
                        <p>x</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid section1">
    <div class="row _flex logo_outers">
        <div class="col-xs-7 col-sm-10">
            <img class="logo" src="{{asset('admin/assets/setting/'.getSettingMasterHome()->photo_site)}}">
        </div>

        <div class="col-xs-3 col-sm-2">
            <div class="dropdown">
                <a class="btn btn-success dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    اللغه
                </a>

                <div class="dropdown-menu">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" href="#">
                        {{ $properties['native'] }}
                    </a>
                    </li>
                  
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</div>

<div class="bg2">
    <div class="container-fluid section01">
        <div class="row">
            <div class="container" id="banner-form">
                <div class="col-md-7 newone">
                    <h2>{{ getSettingMasterHome()->title }}</h2>
                    {{-- class="img-responsive" --}}
                    <p><img  src="{{asset('admin/assets/setting/'.getSettingMasterHome()->photo_navbar)}}" width="635" height="69" ></p>
                    
                    <form action="{{route('register.store')}}" method="POST" autocomplete="off">
                        @csrf
                        <div class="col-md-6">
                            <input type="text" id="txtName" required placeholder="Name" name="name">
                        </div>
                        <div class="col-md-6">
                            <input id="txtEmailTwo" required placeholder="Email" type="email" name="email">
                        </div>
                        <div class="col-md-6">

                            <select style="
                            width: 100%;
                            border: none;
                            background: none;
                            font-family: 'robotolight';
                            border: 1px solid #b9b9b9;
                            padding-left: 5px;
                            height: 50px;
                            margin-bottom: 20px;
                        " required id="txtcountryTwo" name="country">
                                <option value="" disabled selected>-- Choose --</option>
                                <option value="93">Afghanistan</option>
                                <option value="355">Albania</option>
                                <option value="213">Algeria</option>
                                <option value="1-684">American Samoa</option>
                                <option value="376">Andorra</option>
                                <option value="244">Angola</option>
                                <option value="1-264">Anguilla</option>
                                <option value="672">Antarctica</option>
                                <option value="1-268">Antigua and Barbuda</option>
                                <option value="54">Argentina</option>
                                <option value="374">Armenia</option>
                                <option value="297">Aruba</option>
                                <option value="61">Australia</option>
                                <option value="43">Austria</option>
                                <option value="994">Azerbaijan</option>
                                <option value="1-242">Bahamas</option>
                                <option value="973">Bahrain</option>
                                <option value="880">Bangladesh</option>
                                <option value="1-246">Barbados</option>
                                <option value="375">Belarus</option>
                                <option value="32">Belgium</option>
                                <option value="501">Belize</option>
                                <option value="229">Benin</option>
                                <option value="1-441">Bermuda</option>
                                <option value="975">Bhutan</option>
                                <option value="591">Bolivia</option>
                                <option value="387">Bosnia and Herzegovina</option>
                                <option value="267">Botswana</option>
                                <option value="55">Brazil</option>
                                <option value="246">British Indian Ocean Territory</option>
                                <option value="1-284">British Virgin Islands</option>
                                <option value="673">Brunei</option>
                                <option value="359">Bulgaria</option>
                                <option value="226">Burkina Faso</option>
                                <option value="257">Burundi</option>
                                <option value="855">Cambodia</option>
                                <option value="237">Cameroon</option>
                                <option value="1">Canada</option>
                                <option value="238">Cape Verde</option>
                                <option value="1-345">Cayman Islands</option>
                                <option value="236">Central African Republic</option>
                                <option value="235">Chad</option>
                                <option value="56">Chile</option>
                                <option value="86">China</option>
                                <option value="61">Christmas Island</option>
                                <option value="61">Cocos Islands</option>
                                <option value="57">Colombia</option>
                                <option value="269">Comoros</option>
                                <option value="682">Cook Islands</option>
                                <option value="506">Costa Rica</option>
                                <option value="385">Croatia</option>
                                <option value="53">Cuba</option>
                                <option value="599">Curacao</option>
                                <option value="357">Cyprus</option>
                                <option value="420">Czech Republic</option>
                                <option value="243">Democratic Republic of the Congo</option>
                                <option value="45">Denmark</option>
                                <option value="253">Djibouti</option>
                                <option value="1-767">Dominica</option>
                                <option value="1-809, 1-829, 1-849">Dominican Republic</option>
                                <option value="670">East Timor</option>
                                <option value="593">Ecuador</option>
                                <option value="20">Egypt</option>
                                <option value="503">El Salvador</option>
                                <option value="240">Equatorial Guinea</option>
                                <option value="291">Eritrea</option>
                                <option value="372">Estonia</option>
                                <option value="251">Ethiopia</option>
                                <option value="500">Falkland Islands</option>
                                <option value="298">Faroe Islands</option>
                                <option value="679">Fiji</option>
                                <option value="358">Finland</option>
                                <option value="33">France</option>
                                <option value="689">French Polynesia</option>
                                <option value="241">Gabon</option>
                                <option value="220">Gambia</option>
                                <option value="995">Georgia</option>
                                <option value="49">Germany</option>
                                <option value="233">Ghana</option>
                                <option value="350">Gibraltar</option>
                                <option value="30">Greece</option>
                                <option value="299">Greenland</option>
                                <option value="1-473">Grenada</option>
                                <option value="1-671">Guam</option>
                                <option value="502">Guatemala</option>
                                <option value="44-1481">Guernsey</option>
                                <option value="224">Guinea</option>
                                <option value="245">Guinea-Bissau</option>
                                <option value="592">Guyana</option>
                                <option value="509">Haiti</option>
                                <option value="504">Honduras</option>
                                <option value="852">Hong Kong</option>
                                <option value="36">Hungary</option>
                                <option value="354">Iceland</option>
                                <option value="91">India</option>
                                <option value="62">Indonesia</option>
                                <option value="98">Iran</option>
                                <option value="964">Iraq</option>
                                <option value="353">Ireland</option>
                                <option value="44-1624">Isle of Man</option>
                                <option value="972">Israel</option>
                                <option value="39">Italy</option>
                                <option value="225">Ivory Coast</option>
                                <option value="1-876">Jamaica</option>
                                <option value="81">Japan</option>
                                <option value="44-1534">Jersey</option>
                                <option value="962">Jordan</option>
                                <option value="7">Kazakhstan</option>
                                <option value="254">Kenya</option>
                                <option value="686">Kiribati</option>
                                <option value="383">Kosovo</option>
                                <option value="965">Kuwait</option>
                                <option value="996">Kyrgyzstan</option>
                                <option value="856">Laos</option>
                                <option value="371">Latvia</option>
                                <option value="961">Lebanon</option>
                                <option value="266">Lesotho</option>
                                <option value="231">Liberia</option>
                                <option value="218">Libya</option>
                                <option value="423">Liechtenstein</option>
                                <option value="370">Lithuania</option>
                                <option value="352">Luxembourg</option>
                                <option value="853">Macau</option>
                                <option value="389">Macedonia</option>
                                <option value="261">Madagascar</option>
                                <option value="265">Malawi</option>
                                <option value="60">Malaysia</option>
                                <option value="960">Maldives</option>
                                <option value="223">Mali</option>
                                <option value="356">Malta</option>
                                <option value="692">Marshall Islands</option>
                                <option value="222">Mauritania</option>
                                <option value="230">Mauritius</option>
                                <option value="262">Mayotte</option>
                                <option value="52">Mexico</option>
                                <option value="691">Micronesia</option>
                                <option value="373">Moldova</option>
                                <option value="377">Monaco</option>
                                <option value="976">Mongolia</option>
                                <option value="382">Montenegro</option>
                                <option value="1-664">Montserrat</option>
                                <option value="212">Morocco</option>
                                <option value="258">Mozambique</option>
                                <option value="95">Myanmar</option>
                                <option value="264">Namibia</option>
                                <option value="674">Nauru</option>
                                <option value="977">Nepal</option>
                                <option value="31">Netherlands</option>
                                <option value="599">Netherlands Antilles</option>
                                <option value="687">New Caledonia</option>
                                <option value="64">New Zealand</option>
                                <option value="505">Nicaragua</option>
                                <option value="227">Niger</option>
                                <option value="234">Nigeria</option>
                                <option value="683">Niue</option>
                                <option value="850">North Korea</option>
                                <option value="1-670">Northern Mariana Islands</option>
                                <option value="47">Norway</option>
                                <option value="968">Oman</option>
                                <option value="92">Pakistan</option>
                                <option value="680">Palau</option>
                                <option value="970">Palestine</option>
                                <option value="507">Panama</option>
                                <option value="675">Papua New Guinea</option>
                                <option value="595">Paraguay</option>
                                <option value="51">Peru</option>
                                <option value="63">Philippines</option>
                                <option value="64">Pitcairn</option>
                                <option value="48">Poland</option>
                                <option value="351">Portugal</option>
                                <option value="1-787, 1-939">Puerto Rico</option>
                                <option value="974">Qatar</option>
                                <option value="242">Republic of the Congo</option>
                                <option value="262">Reunion</option>
                                <option value="40">Romania</option>
                                <option value="7">Russia</option>
                                <option value="250">Rwanda</option>
                                <option value="590">Saint Barthelemy</option>
                                <option value="290">Saint Helena</option>
                                <option value="1-869">Saint Kitts and Nevis</option>
                                <option value="1-758">Saint Lucia</option>
                                <option value="590">Saint Martin</option>
                                <option value="508">Saint Pierre and Miquelon</option>
                                <option value="1-784">Saint Vincent and the Grenadines</option>
                                <option value="685">Samoa</option>
                                <option value="378">San Marino</option>
                                <option value="239">Sao Tome and Principe</option>
                                <option value="966">Saudi Arabia</option>
                                <option value="221">Senegal</option>
                                <option value="381">Serbia</option>
                                <option value="248">Seychelles</option>
                                <option value="232">Sierra Leone</option>
                                <option value="65">Singapore</option>
                                <option value="1-721">Sint Maarten</option>
                                <option value="421">Slovakia</option>
                                <option value="386">Slovenia</option>
                                <option value="677">Solomon Islands</option>
                                <option value="252">Somalia</option>
                                <option value="27">South Africa</option>
                                <option value="82">South Korea</option>
                                <option value="211">South Sudan</option>
                                <option value="34">Spain</option>
                                <option value="94">Sri Lanka</option>
                                <option value="249">Sudan</option>
                                <option value="597">Suriname</option>
                                <option value="47">Svalbard and Jan Mayen</option>
                                <option value="268">Swaziland</option>
                                <option value="46">Sweden</option>
                                <option value="41">Switzerland</option>
                                <option value="963">Syria</option>
                                <option value="886">Taiwan</option>
                                <option value="992">Tajikistan</option>
                                <option value="255">Tanzania</option>
                                <option value="66">Thailand</option>
                                <option value="228">Togo</option>
                                <option value="690">Tokelau</option>
                                <option value="676">Tonga</option>
                                <option value="1-868">Trinidad and Tobago</option>
                                <option value="216">Tunisia</option>
                                <option value="90">Turkey</option>
                                <option value="993">Turkmenistan</option>
                                <option value="1-649">Turks and Caicos Islands</option>
                                <option value="688">Tuvalu</option>
                                <option value="1-340">U.S. Virgin Islands</option>
                                <option value="256">Uganda</option>
                                <option value="380">Ukraine</option>
                                <option value="971">United Arab Emirates</option>
                                <option value="44">United Kingdom</option>
                                <option value="1">United States</option>
                                <option value="598">Uruguay</option>
                                <option value="998">Uzbekistan</option>
                                <option value="678">Vanuatu</option>
                                <option value="379">Vatican</option>
                                <option value="58">Venezuela</option>
                                <option value="84">Vietnam</option>
                                <option value="681">Wallis and Futuna</option>
                                <option value="212">Western Sahara</option>
                                <option value="967">Yemen</option>
                                <option value="260">Zambia</option>
                                <option value="263">Zimbabwe</option>
                            </select>

                        </div>
                        <div class="col-md-6">

                            <input type="text" id="txtContact" name="phone" required placeholder="Mobile"
                                style="width:98%;" onkeypress="return isNum(event)" />
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" id="chkbox" style="width: 15px;height: 15px;margin-right: 10px;"
                                required />
                            <span style="font-size: 12px;margin-left: -10px;">Receive information & updates over
                                <img src="{{asset('website/mba/images/whatsapp.jpg')}}" style="width: 8%;" />
                                WhatsApp</span>
                        </div>
                        <button id="btnSubmit" type="submit" class="btnsubmit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-md-12">
        <div class="banner-details-holder">
            <ul class="list" style="margin-bottom:0px; margin-left:0px;">
                
                @forelse ( getNavbar() as $row)
                <li class="list-item ml30" style="text-align: center">
                    <img src="{{asset('admin/assets/navbar/'.$row->photo)}}" width="50" height="50">
                    <p>
                      {{ $row->title }}
                    </p>
                </li>
                @empty
                    
                @endforelse

            </ul>

        </div>
    </div>
</div>

<div class="container-fluid section2" id="Programme">
    <div class="row">
        <div class="container">
           
            <h2>{{ getSectionOne()->title }}</h2>
            <p>
              {{ getSectionOne()->notes }}
            </p>
        </div>
    </div>
</div>


<div class="container-fluid section3 bg01" id="Curriculum">
    <div class="row">
        <div class="container">
            <h2>Choose the path that's right for you</h2>
            <p>Amity University Online now offers MBA with 12 specialization to choose from.</p>
            <div class="row">

                <div class="col-md-1">
                </div>

                <div class="col-md-7">
                    @forelse (getSectionTwo() as $row)
                    <div class="col-md-4 specialization {{ $loop->last ? 'border_bottom ' : null}}" >
                        <div class="thumb">
                            <img src="{{asset('admin/assets/section2/'.$row->cover_photo)}}" width="45" height="46"/>
                        </div>
                        <p>
                           {{ $row->title }} <br>
                           {{ $row->notes }}
                        </p>
                    </div>
                    @empty
                        
                    @endforelse
                  
                </div>

                <div class="col-md-4">
                    <img src="{{asset('admin/assets/setting/'.getSettingMasterHome()->photo_cover)}}" width="304" height="270" class="img-responsive" />
                </div>


            </div>
        </div>
    </div>
</div>


{{-- @if(App::getLocale()=='ar')

<div class="container-fluid section4a">
    <div class="row">
        <div class="container">
            <h2>هيكل البرنامج
            </h2>
            <div class="col-md-7 right-uls">
                <div class="col-lg-6 col-sm-6">
                    <div class="list_icon">
                        <h4>الفصل الدراسي 2</h4>
                        <ul class="mohammed">
                            <li>المحاسبة للمديرين</li>
                            <li>إدارة التسويق</li>
                            <li>الاقتصاد الإداري</li>
                            <li>إحصائيات للإدارة</li>
                            <li>التواصل المهني</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="list_icon">
                        <h4>الفصل الدراسي 1</h4>
                        <ul class="mohammed">
                            <li>المحاسبة للمديرين</li>
                            <li>إدارة التسويق</li>
                            <li>الاقتصاد الإداري</li>
                            <li>إحصائيات للإدارة</li>
                            <li>التواصل المهني</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="list_icon">
                        <h4>الفصل الدراسي 4</h4>
                        <ul class="mohammed">
                            <li>المحاسبة للمديرين</li>
                            <li>إدارة التسويق</li>
                            <li>الاقتصاد الإداري</li>
                            <li>إحصائيات للإدارة</li>
                            <li>التواصل المهني</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="list_icon">
                        <h4>الفصل الدراسي 3</h4>
                        <ul class="mohammed">
                            <li>المحاسبة للمديرين</li>
                            <li>إدارة التسويق</li>
                            <li>الاقتصاد الإداري</li>
                            <li>إحصائيات للإدارة</li>
                            <li>التواصل المهني</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="list_icon3">
                        <span>وحدات الدورة الإضافية حسب التخصص المختار</span>

                    </div>
                    <a href="#banner-form" class="know-more">إعرف المزيد</a>
                </div>
            </div>

        </div>
    </div>
</div>
@else --}}
<div class="container-fluid section4a">
    <div class="row">
        <div class="container">
            <h2>{{ getSettingMasterHome()->title }}</h2>
            <div class="col-md-7 {{ App::getLocale()=='ar' ? 'right-uls' : '' }} ">

                @forelse (getSectionTheres() as $row)
                <div class="col-md-6 col-sm-6 ">
                    <div class="list_icon">
                        <h4>{{ $row->category }}</h4>
                        <ul class="{{ App::getLocale()=='ar' ? 'mohamed' : 'widget3' }}">

                            @foreach (explode(',', $row->sub_category) as $sub_category)
                            <li>{{ $sub_category }}</li>
                            @endforeach
                          
                           
                        </ul>
                    </div>
                </div>
                @empty
                    
                @endforelse

               

             

                
            </div>

        </div>
    </div>
</div>
{{-- @endif --}}


<div class="container-fluid section5" id="Pedagogy">
    <div class="row">
        <div class="container">
            <h2>{{ getSettingMasterHome()->title }}</h2>
            <div class="owl-carousel2 owl-theme">
                  @forelse (getSectionFour() as $row)
                <div class="item">
                  
                    <div class="col-md-5 ">
                        <img src="{{asset('admin/assets/section4/'.$row->photo)}}" />
                    </div>

                    <div class="col-md-7 right">
                        <h3>{{ $row->title }}</h3>
                        <p>
                            {{ $row->notes }}
                        </p>
                    </div>

                 
                </div>
                @empty
                        
                @endforelse
                <div class="item">
                
                <div class="col-md-7 left">
                    <h3></h3>
                    <p></p>
                </div>

                <div class="col-md-5 imgright">
                    <img src="" />
                </div>
                </div>
               
            </div>
        </div>
    </div>
</div>

<div class="container-fluid section4">
    <div class="row">
        <div class="container">
            <h2>{{ getSettingMasterHome()->name_site }}</h2>
            <div class="row">
                @forelse (getSectionfives() as $row)
                <div class="col-lg-6">
                    <a class="wmBox testimonials_div" href="mba.html#"
                        data-popup="{{ $row->url }}">
                        <img src="{{asset('admin/assets/section5/'.$row->photo)}}" class="img-responsive">
                    </a>
                </div>
                @empty
                    
                @endforelse
               
                {{-- <div class="col-lg-6">
                    <a class="wmBox testimonials_div" href="mba.html#"
                        data-popup="https://www.youtube.com/embed/KDB1xC6h6n0?rel=0&amp;controls=0&amp;showinfo=0">
                        <img src="{{asset('website/mba/images/testimonials2.jpg')}}" class="img-responsive">
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</div>

<div class="container-fluid section8 bg01">
    <div class="row">
        <div class="container">
            <h2>{{ getSettingMasterHome()->title }}</h2>
            <!--<div class="col-md-2">
                <img src="~/images/11.png" />
            </div>
            <div class="col-md-2">
                <img src="~/images/22.png" />
            </div>
            <div class="col-md-2">
                <img src="~/images/33.png" />
            </div>
            <div class="col-md-2">
                <img src="~/images/44.png" />
            </div>
            <div class="col-md-2">
                <img src="~/images/55.png" />
            </div>
            <div class="col-md-2">
                <img src="~/images/66.png" />
            </div>-->
            <div class="owl-carousel5 owl-theme">
@forelse (getSectionsix() as $row)
<div class="item"><img src="{{asset('admin/assets/section6/'.$row->photo)}}"></div>
@empty
    
@endforelse
              

              
            </div>
        </div>
    </div>
</div>



<div class="container-fluid section6" id="Eligibility">
    <div class="row">
        <div class="container">
            <div class="col-md-12 col-sm-7 section6" style="margin-left:15px;">
                <h2>{{ getSettingMasterHome()->title }}</h2>
                
                @forelse (getSectionseven() as $row)
                <div class="col-md-6">
                    <h4>{{ $row->category }}</h4>
                    <ul style="margin-left:20px;">
                        @foreach (explode(',', $row->sub_category) as $sub_category2)
                        <li>{{ $sub_category2 }}</li>
                        @endforeach
                    </ul>
                </div>
                @empty
                    
                @endforelse
               
                
            </div>
        </div>
    </div>
</div>

<div class="container-fluid section7" id="Accreditations">
    <div class="row">
        <div class="container">
            <h2>{{ getSectioneight()->title }}</h2>
            <div class="col-md-12 col-sm-12 text-center">
                <p>
                {{ getSectioneight()->notes }}
                </p>
            </div>
            <div class="col-md-12 col-sm-12">
                <img src="{{asset('admin/assets/section8/'.getSectioneight()->photo)}}" width="1110" height="115"
                    style="margin:auto;">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid section9">
    <div class="row">
        <div class="container">
            <h2>
                Copyright © {{date('Y')}} <a href="" style="color:#fff;float:right;" target="_blank">{{ getSettingMasterHome()->name_site }}</a>
            </h2>
        </div>
    </div>
</div>
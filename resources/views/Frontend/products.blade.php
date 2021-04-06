@extends('layouts.Frontend.app')
@section('title')
    Products
@endsection
@push('subheader')
<div id="Subheader">
    <div class="container">
        <div class="column one">
            <h1 class="title">Category Name</h1>
        </div>
    </div>
</div> 
@endpush
@section('content')
<div class="content_wrapper clearfix">

    <!-- .sections_group -->
    <div class="sections_group">
  
        <div class="entry-content">
  
            <div class="section" style="padding-top:80px; padding-bottom:40px; background-color:#f8f9fb">
                <div class="section_wrapper clearfix">
                    <div class="items_group clearfix">
                        <!-- One full width row-->
                        <div class="column one column_column ">
                            <div class="column_attr align_center">
                                <div class="image_frame no_link scale-with-grid alignnone no_border">
                                    <div class="image_wrapper"><img class="scale-with-grid" src="agro/images/home_agro_heading_icon.png" alt="" width="42" height="38" />
                                    </div>
                                </div>
  
                                <hr class="no_line hrmargin_b_20" />
  
                                <h2>Our newest products</h2>
                            </div>
                        </div>
                        <!-- One Third (1/3) Column -->
                        <div class="column one-third column_column">
                            <div class="column_attr align_center">
                                <div style="margin-right: -3%;">
                                    <div class="image_frame no_link scale-with-grid alignnone no_border">
                                        <div class="image_wrapper"><img class="scale-with-grid" src="{{asset('images/home_agro_product1s.jpg')}}" alt="" width="380" height="282" />
                                        </div>
                                    </div>
  
                                    <hr class="no_line hrmargin_b_20" />
  
                                    <div style="padding: 20px 6%; background: url({{asset('images/home_agro_sep2.png')}}) repeat-y right top">
                                        <h4>AGRO Smart P200</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec mauris auctor; placerat ligula vel, lobortis lorem. Duis laoreet a nisl pulvinar massa nunc.
                                        </p>
                                        <a class="read_more" href="#">Phasellus fermen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- One Third (1/3) Column -->
                        <div class="column one-third column_column">
                            <div class="column_attr align_center">
                                <div style="margin-right: -3%;">
                                    <div class="image_frame no_link scale-with-grid alignnone no_border">
                                        <div class="image_wrapper"><img class="scale-with-grid" src="{{asset('images/home_agro_product2s.jpg')}}" alt="" width="380" height="282" />
                                        </div>
                                    </div>
  
                                    <hr class="no_line hrmargin_b_20" />
  
                                    <div style="padding: 20px 6%; background: url({{asset('images/home_agro_sep2.png')}}) repeat-y right top">
                                        <h4>AGRO Monster 2300</h4>
                                        <p>
                                            Praesent et cursus libero, ut accumsan elit. Vestibulum venenatis urna quis fermentum fringilla. Pellentesque non pharetra leo, et malesuada felis orci aliquam.
                                        </p>
                                        <a class="read_more" href="#">Phasellus fermen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- One Third (1/3) Column -->
                        <div class="column one-third column_column">
                            <div class="column_attr align_center">
                                <div style="margin-right: -3%;">
                                    <div class="image_frame no_link scale-with-grid alignnone no_border">
                                        <div class="image_wrapper"><img class="scale-with-grid" src="{{asset('images/home_agro_product3s.jpg')}}" alt="" width="380" height="282" />
                                        </div>
                                    </div>
  
                                    <hr class="no_line hrmargin_b_20" />
  
                                    <div style="padding: 20px 6%;">
                                        <h4>AGRO Plow 22/100</h4>
                                        <p>
                                            Fusce consectetur pulvinar ligula, quis tincidunt risus pharetra ac. Praesent pharetra justo sit amet libero euismod, at placerat ipsum placerat? viverra fusce.
                                        </p>
                                        <a class="read_more" href="#">Phasellus fermen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- One Third (1/3) Column -->
                        <div class="column one-third column_column">
                          <div class="column_attr align_center">
                              <div style="margin-right: -3%;">
                                  <div class="image_frame no_link scale-with-grid alignnone no_border">
                                      <div class="image_wrapper"><img class="scale-with-grid" src="{{asset('images/home_agro_product1s.jpg')}}" alt="" width="380" height="282" />
                                      </div>
                                  </div>
  
                                  <hr class="no_line hrmargin_b_20" />
  
                                  <div style="padding: 20px 6%; background: url({{asset('images/home_agro_sep2.png')}}) repeat-y right top">
                                      <h4>AGRO Smart P200</h4>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec mauris auctor; placerat ligula vel, lobortis lorem. Duis laoreet a nisl pulvinar massa nunc.
                                      </p>
                                      <a class="read_more" href="#">Phasellus fermen</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- One Third (1/3) Column -->
                      <div class="column one-third column_column">
                          <div class="column_attr align_center">
                              <div style="margin-right: -3%;">
                                  <div class="image_frame no_link scale-with-grid alignnone no_border">
                                      <div class="image_wrapper"><img class="scale-with-grid" src="{{asset('images/home_agro_product2s.jpg')}}" alt="" width="380" height="282" />
                                      </div>
                                  </div>
  
                                  <hr class="no_line hrmargin_b_20" />
  
                                  <div style="padding: 20px 6%; background: url({{asset('images/home_agro_sep2.png')}}) repeat-y right top">
                                      <h4>AGRO Monster 2300</h4>
                                      <p>
                                          Praesent et cursus libero, ut accumsan elit. Vestibulum venenatis urna quis fermentum fringilla. Pellentesque non pharetra leo, et malesuada felis orci aliquam.
                                      </p>
                                      <a class="read_more" href="#">Phasellus fermen</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- One Third (1/3) Column -->
                      <div class="column one-third column_column">
                          <div class="column_attr align_center">
                              <div style="margin-right: -3%;">
                                  <div class="image_frame no_link scale-with-grid alignnone no_border">
                                      <div class="image_wrapper"><img class="scale-with-grid" src="{{asset('images/home_agro_product3s.jpg')}}" alt="" width="380" height="282" />
                                      </div>
                                  </div>
  
                                  <hr class="no_line hrmargin_b_20" />
  
                                  <div style="padding: 20px 6%;">
                                      <h4>AGRO Plow 22/100</h4>
                                      <p>
                                          Fusce consectetur pulvinar ligula, quis tincidunt risus pharetra ac. Praesent pharetra justo sit amet libero euismod, at placerat ipsum placerat? viverra fusce.
                                      </p>
                                      <a class="read_more" href="#">Phasellus fermen</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- One Third (1/3) Column -->
                      <div class="column one-third column_column">
                        <div class="column_attr align_center">
                            <div style="margin-right: -3%;">
                                <div class="image_frame no_link scale-with-grid alignnone no_border">
                                    <div class="image_wrapper"><img class="scale-with-grid" src="{{asset('images/home_agro_product1s.jpg')}}" alt="" width="380" height="282" />
                                    </div>
                                </div>
  
                                <hr class="no_line hrmargin_b_20" />
  
                                <div style="padding: 20px 6%; background: url({{asset('images/home_agro_sep2.png')}}) repeat-y right top">
                                    <h4>AGRO Smart P200</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec mauris auctor; placerat ligula vel, lobortis lorem. Duis laoreet a nisl pulvinar massa nunc.
                                    </p>
                                    <a class="read_more" href="#">Phasellus fermen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- One Third (1/3) Column -->
                    <div class="column one-third column_column">
                        <div class="column_attr align_center">
                            <div style="margin-right: -3%;">
                                <div class="image_frame no_link scale-with-grid alignnone no_border">
                                    <div class="image_wrapper"><img class="scale-with-grid" src="{{asset('images/home_agro_product2s.jpg')}}" alt="" width="380" height="282" />
                                    </div>
                                </div>
  
                                <hr class="no_line hrmargin_b_20" />
  
                                <div style="padding: 20px 6%; background: url({{asset('images/home_agro_sep2.png')}}) repeat-y right top">
                                    <h4>AGRO Monster 2300</h4>
                                    <p>
                                        Praesent et cursus libero, ut accumsan elit. Vestibulum venenatis urna quis fermentum fringilla. Pellentesque non pharetra leo, et malesuada felis orci aliquam.
                                    </p>
                                    <a class="read_more" href="#">Phasellus fermen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- One Third (1/3) Column -->
                    <div class="column one-third column_column">
                        <div class="column_attr align_center">
                            <div style="margin-right: -3%;">
                                <div class="image_frame no_link scale-with-grid alignnone no_border">
                                    <div class="image_wrapper"><img class="scale-with-grid" src="{{asset('images/home_agro_product3s.jpg')}}" alt="" width="380" height="282" />
                                    </div>
                                </div>
  
                                <hr class="no_line hrmargin_b_20" />
  
                                <div style="padding: 20px 6%;">
                                    <h4>AGRO Plow 22/100</h4>
                                    <p>
                                        Fusce consectetur pulvinar ligula, quis tincidunt risus pharetra ac. Praesent pharetra justo sit amet libero euismod, at placerat ipsum placerat? viverra fusce.
                                    </p>
                                    <a class="read_more" href="#">Phasellus fermen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- One Third (1/3) Column -->
                    <div class="column one-third column_column">
                      <div class="column_attr align_center">
                          <div style="margin-right: -3%;">
                              <div class="image_frame no_link scale-with-grid alignnone no_border">
                                  <div class="image_wrapper"><img class="scale-with-grid" src="{{asset('images/home_agro_product1s.jpg')}}" alt="" width="380" height="282" />
                                  </div>
                              </div>
  
                              <hr class="no_line hrmargin_b_20" />
  
                              <div style="padding: 20px 6%; background: url({{asset('images/home_agro_sep2.png')}}) repeat-y right top">
                                  <h4>AGRO Smart P200</h4>
                                  <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec mauris auctor; placerat ligula vel, lobortis lorem. Duis laoreet a nisl pulvinar massa nunc.
                                  </p>
                                  <a class="read_more" href="#">Phasellus fermen</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- One Third (1/3) Column -->
                  <div class="column one-third column_column">
                      <div class="column_attr align_center">
                          <div style="margin-right: -3%;">
                              <div class="image_frame no_link scale-with-grid alignnone no_border">
                                  <div class="image_wrapper"><img class="scale-with-grid" src="{{asset('images/home_agro_product2s.jpg')}}" alt="" width="380" height="282" />
                                  </div>
                              </div>
  
                              <hr class="no_line hrmargin_b_20" />
  
                              <div style="padding: 20px 6%; background: url({{asset('images/home_agro_sep2.png')}}) repeat-y right top">
                                  <h4>AGRO Monster 2300</h4>
                                  <p>
                                      Praesent et cursus libero, ut accumsan elit. Vestibulum venenatis urna quis fermentum fringilla. Pellentesque non pharetra leo, et malesuada felis orci aliquam.
                                  </p>
                                  <a class="read_more" href="#">Phasellus fermen</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- One Third (1/3) Column -->
                  <div class="column one-third column_column">
                      <div class="column_attr align_center">
                          <div style="margin-right: -3%;">
                              <div class="image_frame no_link scale-with-grid alignnone no_border">
                                  <div class="image_wrapper"><img class="scale-with-grid" src="{{asset('images/home_agro_product3s.jpg')}}" alt="" width="380" height="282" />
                                  </div>
                              </div>
  
                              <hr class="no_line hrmargin_b_20" />
  
                              <div style="padding: 20px 6%;">
                                  <h4>AGRO Plow 22/100</h4>
                                  <p>
                                      Fusce consectetur pulvinar ligula, quis tincidunt risus pharetra ac. Praesent pharetra justo sit amet libero euismod, at placerat ipsum placerat? viverra fusce.
                                  </p>
                                  <a class="read_more" href="#">Phasellus fermen</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                </div>
            </div>
            <div class="section the_content no_content">
                <div class="section_wrapper">
                    <div class="the_content_wrapper"></div>
                </div>
            </div>
        </div>
  
    </div>
  
    <!-- .four-columns - sidebar -->
  
  </div>
@endsection
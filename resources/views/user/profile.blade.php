@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>Profile<small>page</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">profile</li>
    </ol>
</section>
<section class="content">
<!-- if isset create profile show profile form -->

<!-- else show profile -->
   <div class="row">
      <div class="col-md-10 col-md-offset-1">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-purple text-right">
              <h3 class="widget-user-username">{{Auth::user()->fullname}}</h3>
              <h5 class="widget-user-desc">{{Auth::user()->position}}</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                  <h3 class="text-center">Bio</h3>
                  <div class="col-sm-4 border-right">
                     <div class="description-block">

                       <h5 class="description-header">E-mail</h5>
                       <span class="description-text">{{Auth::user()->email}}</span>
                     </div>
                     <!-- /.description-block -->
                  </div>
                     <!-- /.col -->
                  <div class="col-sm-4 border-right">
                     <div class="description-block">
                       <h5 class="description-header">Phone Number</h5>
                       <span class="description-text">{{Auth::user()->phone}}</span>
                     </div>
                     <!-- /.description-block -->
                  </div>
                     <!-- /.col -->
                  <div class="col-sm-4">
                     <div class="description-block">
                       <h5 class="description-header">Address</h5>
                       <span class="description-text">{{Auth::user()->address}}</span>
                  </div>
                     <!-- /.description-block -->
                   </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <div class="col-md-10 col-md-offset-1">
            <div class="box box-success col-md-4">
               <div class="box-header text-center"><h3>About Me</h3></div>
               <div class="box-body chat"  id="chat-box">
                  <!-- sample data to be edit later to populate from database -->
                  <p>I'm a full stack web Developer. I create beautiful experiences and nurture healthy relationships because everyone matter to me.</p>
               </div>
            </div>

         </div>
         <!-- Skill box -->
         <div class="col-md-10 col-md-offset-1">

               <div class="box box-info">
                  <div class="box-header text-center"><h3>Skills Set</h3></div>
                  <div class="box-body chat"  id="chat-box">
                     <div class="row">
                        <!-- sample data to be edit later to populate from database -->
                        <!-- professional skill -->
                        <div class="col-md-6 border-right">
                           <h5 style="padding-bottom:30px;"><b>Professional skills</b></h5>
                            <table class="table borderless">
                                <tr>
                                <td style="margin:5px;color:green; font-weight:bold;"><i  class="fa fa-check" aria-hidden="true"></i>E-Commerce</td>
                                <td style="color:green; font-weight:bold;"><i class="fa fa-check" aria-hidden="true"></i>Web Design</td>
               <!--                        -->
                                </tr>
                           <td style="margin:5px; color:green; font-weight:bold;""><i class="fa fa-check" aria-hidden="true"></i>Web Application</td>
                                <td style="color:green; font-weight:bold;"><i class="fa fa-check" aria-hidden="true"></i>Mobile Application</td>
               <!--                        <td style=""><span class="text-muted">Location:</span>  Lagos</td>-->
                                </tr>
                            </tr>
                           <td style="margin:5px; color:green; font-weight:bold;""><i class="fa fa-check" aria-hidden="true"></i>Business Analysis</td>
                                <td style="color:green; font-weight:bold;"><i class="fa fa-check" aria-hidden="true"></i>Web Design</td>
               <!--                        <td style=""><span class="text-muted">Location:</span>  Lagos</td>-->
                                </tr>
                            </table><hr>
                            <!-- personal Skill -->
                              <h5 style="padding-bottom:30px;"><b>Interpersonal Skill</b></h5>
                              <table class="table borderless">
                                 <tbody>
                                    <tr>
                                        <td style="color:orange; font-weight:bold;"><i class="fa fa-check" aria-hidden="true"></i> Team player</td>
            							        <td style="color:orange; font-weight:bold;"><i class="fa fa-check" aria-hidden="true"></i> Value oriented</td>
                                    </tr>
            						       <tr>
                                        <td style="color:orange; font-weight:bold;"><i class="fa fa-check" aria-hidden="true"></i> Team Leadership</td>
            							       <td style="color:orange; font-weight:bold;"><i class="fa fa-check" aria-hidden="true"></i> Self Motivated</td>
                                    </tr>
            						       <tr>
                                        <td style="color:orange; font-weight:bold;"><i class="fa fa-check" aria-hidden="true"></i> Interpersonal Relationship</td>
            							        <td style="color:orange; font-weight:bold;"><i class="fa fa-check" aria-hidden="true"></i> Targer Directed</td>
                                     </tr>
            						         <tr>
                                        <td style="color:orange; font-weight:bold;"><i class="fa fa-check" aria-hidden="true"></i> Personal</td>
            							        <td style="color:orange; font-weight:bold;"><i class="fa fa-check" aria-hidden="true"></i> Personal Integrity</td>
                                     </tr>
                                  </tbody>
                              </table>
                         </div>
                         <!-- language -->
                         <div class="col-md-6">
                              <h5 style="padding-bottom:30px;"><b>Programming Knowledge</b></h5>
                              <h4>Html and CSS</h4>
                              <div class="progress">
                                 <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <h4>Javascript</h4>
                              <div class="progress">
                                 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <h4>Jquery</h4>
                              <div class="progress">
                                 <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <h4>Python</h4>
                              <div class="progress">
                                 <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <h4>Mysql</h4>
                              <div class="progress">
                                 <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <h4>PHP</h4>
                              <div class="progress">
                                 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                         </div>
                         </div>
                      </div>
                  </div>
               </div>


         </div>
   </div>
</section>
@endsection

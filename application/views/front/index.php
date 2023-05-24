      <section class="banner">
        <div class="row no-margin">
          <div class="container-fluid no-padding">
          <!--  <div class="col-md-4 banner-caption">
              <p class="caption-fom">FOM UNIVERSITY OF APPLIED SCIENCES</p>
              <p class="caption-german">GERMAN STATE RECOGNIZED</p>
              <p class="caption-master">MASTERS DEGREE AT A COMPETITIVE PRICE <span class="color-yellow">Rs. 21,00,000/*-</span></p>
              <p class="caption-tution">Includes tuition fees for 2 years and living expenses for 12 months in Germany</p> 
              <p class="caption-tution">**Education Loan available<br>
              *1 euro = Rs. 90 as on 15<sup>th</sup> June 2021</p>
            </div>  -->
            
                <div class="col-md-4 banner-caption">
              <p class="caption-fom">FOM UNIVERSITY OF APPLIED SCIENCES</p>
              <p class="caption-german">GERMAN STATE RECOGNIZED</p>
              <p class="caption-master">MASTER'S DEGREE AT A COMPETITIVE PRICE <br> <span class="color-yellow">Rs. 22,77,660/*-</span></p>
              <p class="caption-tution">Includes tuition fees for 2 years and living expenses for 12 months in Germany</p> 
              <p class="caption-tution">**Education Loan available<br>
              *1 euro = Rs. 89 as on 30<sup>th</sup> March 2023</p>
            </div>


            <div class="col-md-5 col-md-offset-2"> 
            <?php if(!empty($validation_message)){ ?><div class="alert alert-danger"><?php echo $validation_message; ?></div><?php } ?>
            
				 <?php if(!empty($success_message)){ ?>
				 <div class="alert alert-success alert-dismissable">
				 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				 <?php echo $success_message; ?>
				 </div>
				 <script type="text/javascript">
					window.setTimeout(function() {
						$(".alert-success").slideUp(500, function(){
							  $(this).remove();
						  });
					}, 5000);
				</script>
				 <?php } ?>
				 
              <form class="form-horizontal banner-form" method="POST" enctype="multipart/form-data" name="enquiry" id="enquiry" action="<?php echo base_url('index'); ?>">
                <input type="hidden" name="token" value="<?php echo $token; ?>" />
                <p>GET PROGRAM  INFORMATION! </p>
                <div class="form-group">                  
                  <div class="col-sm-6">
                    <input type="text" name="fname" class="form-control" id="inputEmail3" placeholder="First Name" required data-bv-message="Enter first name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="lname" class="form-control" id="inputEmail3" placeholder="Last Name"  required data-bv-message="Enter last name">
                  </div>
                </div>
                <div class="form-group">
                   <div class="col-sm-6">
                    <input type="email"  name="emailid"class="form-control" id="inputEmail3" placeholder="Email" required data-bv-message="Enter email">
                  </div>
                  <div class="col-sm-6">
                 <!--  <input id="contactno" class="form-control" name="contact_no" type="text" required data-bv-message="Please enter ph. no." placeholder="Ph. No." required maxlength="10" size="10" pattern='\d{10}' title='Phone Number (Format: 9999999999)'>
                 
                 -->
                              <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
 </head>
 <body>
     <input id="phone" id="contactno" class="form-control" type="text" name="contact_no" required data-bv-message="Please enter ph. no." placeholder="Ph. No." required maxlength="10" size="10" pattern='\d{10}' title='Phone Number (Format: 9999999999)'>
   
 </body>
  <script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
 </script>
                 
                 
                 
                  </div>
                </div>
                 <div class="form-group">
                   <div class="col-sm-6">
                    <input type="text" name="qualif" class="form-control" id="inputEmail3" placeholder="Qualification"  required data-bv-message="Enter qualification">
                  </div>
                  <div class="col-sm-6">                    
                    <select class="form-control" name="curreng" id="selectBox" onchange="changeFunc();"  required data-bv-message="Select current engagement">
                      <option value="">Current Engagement</option>
                      <option value="Student">Student</option>
                      <option value="Working Professional">Working Professional</option>                      
                    </select>
                   <input name="hmyears" placeholder="How Many Years" class="form-control" type="text" style="display: none" id="textboxes"  required data-bv-message="Enter years">
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-8">
                    <button type="submit" class="btn btn-default form-btn btn-block">Submit</button>
                  </div>
                </div>
              </form>
            </div>            
          </div>
        </div>
      </section>
      
      <section class="about-section">
        <div class="row no-margin">
          <div class="container">                       
            <div class="col-md-12"> 
             <h1 class="heading text-center margin-bottom-30">Job Ready Master's Program in Pune</h1> 
            <div class="col-md-6">
               
                <div class="courses">                    
                    <div class="col-md-2">
                        <img src="<?php echo base_url(); ?>images/big-data-icon.png" alt="" title="" class="img-responsive margin-auto">
                    </div>
                    <div class="col-md-10">
                        
                      <a href="https://www.indiraigsc.in/m-sc-in-big-data-business-analytics/" target="_blank"><p class="courses-title">Master's in Big Data and Business Analytics</p></a>
                    </div>
                    <div class="clear"></div> 
                </div>
                 </div>
                <div class="col-md-6">
                <div class="courses">                 
                      <div class="col-md-2">
                        <img src="<?php echo base_url(); ?>images/industry-ixon.png" alt="" title="" class="img-responsive margin-auto">
                      </div>
                      <div class="col-md-10">
                      <a href="https://www.indiraigsc.in/masters-in-industry-4-0-and-management/" target="_blank"><p class="courses-title">Master's in Industry 4.0 and Management</p></a>
                        
                      </div>
                     <div class="clear"></div> 
                </div>
            </div>
             </div>
         <!--   <div class="col-md-5"> 
               <div style="background-color: #000; padding: 20px; background-color: #ff8e00; border-style: double;text-align: center;">
                   <p class="caption-master">BOOK YOUR ADMISSION</p>
                   <p class="caption-master">Before 25<sup>th</sup> September 2021</p>
                   <p class="caption-fom">AND GET</p>
                   <p class="caption-fom color-yellow">SCHOLARSHIP OF <span> RS. 1,00,000/-</span></p>
                   <p class="caption-fom color-yellow">+</p>
                   <p class="caption-fom color-yellow">LAPTOP WORTH RS. 60,000/-</p>  
               </div>               
            </div> -->
          </div>
        </div>
      </section>

   <!--   <section class="about-section">
        <div class="row no-margin">
          <div class="container">
            <h1 class="heading text-center margin-bottom-30">Job Ready Masters Program</h1>            
            <div class="col-md-6"> 
                <div class="courses">                    
                    <div class="col-md-2">
                        <img src="<?php echo base_url(); ?>images/big-data-icon.png" alt="" title="" class="img-responsive margin-auto">
                    </div>
                    <div class="col-md-10">
                        <p class="courses-title">Masters in Big Data and Business Analytics</p>
                    </div>
                    <div class="clear"></div> 
                </div>
            </div>
            <div class="col-md-6"> 
                <div class="courses">                 
                      <div class="col-md-2">
                        <img src="<?php echo base_url(); ?>images/industry-ixon.png" alt="" title="" class="img-responsive margin-auto">
                      </div>
                      <div class="col-md-10">
                        <p class="courses-title">Masters in Industry 4.0 Management</p>
                      </div>
                     <div class="clear"></div> 
                </div>              
            </div> 
          </div>
        </div>
      </section>  -->

      <section class="color-bg pathway">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 pathway-section"></div>
           
            <div class="col-md-6 product-content">
              <p class="heading-white">PATHWAY ROUTE</p>
              <p class="margin-bottom-30"><strong>1st and 2nd Semester</strong> – Online or IGSC Campus Pune<br>
              <strong>3rd and 4th Semester</strong> – Classroom lectures at FOM University Essen Campus Germany<br>
              Most recommended program for Freshers and Working professionals</p>
              
              <p class="heading-white">JOB PROSPECTS</p>
              <ul>
                <li>Germany is world's 4th largest economy</li>
                <li>Huge demand for IT professionals in Germany</li>
                <li>10000+ jobs in Data Analyst and Industry Automation</li>
                <li>Students of first batch already placed in top German companies</li>
                <li>18 months extended visa for students </li>
                <li>Students after getting job can apply for Blue Card ( Permanent Resident)</li>
                <li>Job placement assistance by FOM University</li>
              </ul>                
            </div>
          </div>
        </div>
      </section>

      <section class="student-testimonials grey-bg">
        <div class="container">
          <div class="row">
            <h2 class="heading-green text-center">95% OF STUDENTS WHO HAVE GRADUATED ALREADY ARE RECRUITED IN TOP GERMAN COMPANIES</h2>
            <p class="heading text-center margin-top-15">Testimonials</p>

            <div id="testimonial-slider" class="owl-carousel">               
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/Pratik.jpg" alt="Pratik">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Pratik</div>
                      <!--  <p><strong>Working at RWE</strong></p>  -->                      
                    </div>
                    <div class="testimonial-content quote"><i class="fa fa-quote-left"></i>
                      " The biggest achievement for any student is to get an opportunity to start their career in after successful completion of the Degree. I was lucky enough to get placed with DO Climate GmbH, as IT strategy Analyst in Germany.
I had an incredible experience studying at Indira Global Study Centre! The professors and staff were fantastic, and I always felt like they were invested in my success. The journey at FOM was equally good. Their passion for teaching really came through in their lectures, and they always made time for me when I needed extra help. The learnings in every class, the live projects and every activity helped me get through my final placements.
Studying Big Data and business analytics was a game-changer for me. I knew I was learning skills that were in high demand, and the coursework was challenging but rewarding.
"
                    </div>
                </div>
                
                
                     <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/Pukhraj.jpg" alt="Pukhraj Sutar">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Pukhraj Sutar</div>
                       <!-- <p><strong>Working at RWE</strong></p>         -->                
                    </div>
                    <div class="testimonial-content quote"><i class="fa fa-quote-left"></i>
                      "I came to IGSC with the vision of getting the best. Learning experiences and placement opportunity after PG in Big Data Business Analytics from FOM university Germany. FOM and IGSC has provided me with immense knowledge about the Big Data and BA domain. Today, I am placed with essenceMediacom at a BI position, in Germany. What more you can one ask for?? As a fresher this is the best career opportunity, I could ask for!! This was possible because of guidance I received both at FOM and IGSC. 
"
                    </div>
                </div>
                
                
                
                     <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/joyal-kandathil.jpg" alt="Joyal Kandathil Emmanuel">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Joyal Kandathil Emmanuel, batch I</div>
                        <p><strong>Working at RWE</strong></p>                        
                    </div>
                    <div class="testimonial-content quote"><i class="fa fa-quote-left"></i>
                      "We had a few opportunities to meet and talk with the business professional in job fairs. To make us prepared well, the international team helped us preparing better CVs and also conducted workshops. The university arranged a few company visits where there was an opportunity to talk with the executives of the companies, which helped a few students to grab opportunities. I express my special gratitude to the international team at FOM University, which is there with the students in both complicated and petty needs. I'm always grateful to the university and its excellent international team. 
                        I'm proud to be a student at FOM university from the first-ever Indian Batch of students in M.Sc. in Big Data and Business Analytics."
                    </div>
                </div>
                
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/bhavika-shrivastava.jpg" alt="Bhavika Srivastava">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Bhavika Srivastava, batch I</div>    
                        <!--<p><strong>Working at RWE</strong></p> -->
                    </div>
                    <div class="testimonial-content quote">
                      "I feel truly blessed to be a part of FOM. It offers many possibilities and supports me on my way to achieve my ultimate goal to land a prestigious and praiseworthy job in Germany. The program content and teaching quality here at FOM offers the opportunity to attain well-paid assignments and make dreams come true." 
                    </div>
                </div>
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/souradeep-pal.jpg" alt="Souradeep Pal">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Souradeep Pal, batch I</div>   
                        <p><strong>Working at HS New Travel GmbH</strong></p>
                    </div>
                    <div class="testimonial-content quote">
                      "The study program at FOM helped me develop the management skills from a strategic and practical perspective that I am able to leverage in driving the right technical strategies on an international platform. The study program has the right blend of theoretical and practival curricula. With a greater sense of independence, confidence, and competence after graduation, I can take on even more challenges at a global level. Right from landing in Germany till now, I have received tremendous support from FOM which has helped me to integrate smoothly into German society and the job market."
                    </div>
                </div>
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/mirza-zeeshan.jpg" alt="Mirza Zeeshan Baig">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Mirza Zeeshan Baig, batch I</div> 
                        <p><strong>Working at Henkel</strong></p>
                    </div>
                    <div class="testimonial-content quote">
                      "I had the most memorable time of my life at this esteemed university. The curriculum is industry oriented and the Professors are industry oriented and the Professors are professionals in their respective fields. Applying what was taught in the lectures has helped me acquire an internship at a renowned international company. The international office is supportive and understanding. I would recommend FOM to any student who is looking for an all-round experience."
                    </div>
                </div>    
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/sonia-kopidesi.jpg" alt="Sonia Kopidesi Prabhakaran">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Sonia Kopidesi Prabhakaran, batch I</div>    
                         <p><strong>Working at GFOS</strong></p>
                    </div>
                    <div class="testimonial-content quote">
                      "Being an expert of data without any doubt is one of the most promising career paths I can imagine. The Masters' program offered at the FOM University provides a snapshot of how big data transforms the way the business is conducted today and demonstrates the state-of-the-art tools to get into the forefront of data-based business analytics."
                    </div>
                </div>
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/yashviir-singh.jpg" alt="Yashviir Singh">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Yashviir Singh, batch I </div>
                        <p><strong>Working at BP</strong></p>
                    </div>
                    <div class="testimonial-content quote">
                      "The learning environment here is quite good and online literature helps in getting the appropriate information. The way that FOM is set up has made it really easy to meet new professional connections across Germany. I am sure Germany would give us a wonderful International exposure which would help in professional growth." 
                    </div>
                </div> 
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/mohammad-farooqi.jpg" alt="Mohammed S. Farooqi">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Mohammed S. Farooqi, batch I</div>   
                        <p><strong>Working at Healix</strong></p>
                    </div>
                    <div class="testimonial-content quote">
                      "First of all, I'm glad I took the decision to join M.Sc. Big Data and Business Analytics. As this was a pilot batch of FOM University, it was a tough decision to make personally. For me, this master's program was a bold decision, as I already had working experience of 9+ years with more than decent earning in India. However, after lots of research, I decided to go-head with the course looking at the syllabus and the reputation of FOM University, one of the top private in Germany.<br> I.O. team has arranged many industrial visits and also a few job fairs. It was this job fair in Köln Messe in Nov-2019, where I found my dream job, it was a perfect fit for both company and me as well. A big thanks to the I.O. team taking us to this fair."  
                    </div>
                </div> 
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/sonam-shahi.jpg" alt="Sonam Shahi">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Sonam Shahi, batch I</div> 
                        <p><strong>Working at BP</strong></p>
                    </div>
                    <div class="testimonial-content quote">
                      "The course taught how to collaborate and work in a team to bring big data solutions to the table. It also explained the role of Business analytics in the real world and provided me with the opportunity to learn and improve my hands-on skills in real time environment. FOM university has given me the confidence to pursue the dream of being a Data Analyst. I now not only have the confidence, but I also have the skills and experience to back it up!" 
                    </div>
                </div>
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/venkat-satya.jpg" alt="Venkata Satya Siddharth Vangapandu">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Venkata Satya Siddharth Vangapandu, batch I</div>  
                        <p><strong>Working at Eurofins NDSC</strong></p>
                    </div>
                    <div class="testimonial-content quote">
                      "I feel extremely privileged to be a part of the prestigious institution, FOM. Fueled by innovative methodologies in teaching, the Professors at FOM encourage us students to think beyond the boundaries and come up with unique ideas. (...) The International Office here is extremely helpful and welcoming. For every student/working professional, looking for popular courses with an industry-oriented curriculum, I can definitely say, FOM is the best choice!" 
                    </div>
                </div>   
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/debjeet-ghosh.jpg" alt="Debjeet Ghosh">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Debjeet Ghosh, batch I</div> 
                        <p><strong>Working at Aldi Nord</strong></p>
                    </div>
                    <div class="testimonial-content quote">
                      "After gaining a few years of experience as an employee for international IT related companies such as BT and Teleperformance, I decided it was time for me to shift my career paths into a more creative environment. In my opinion, this is one of the best programs. Through my studies at FOM and the Career Center of the International Office, I got a job at Deutsche Telekom as an IT engineer." 
                    </div>
                </div> 
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/tharun-tej.jpg" alt="Tharun Tej Bodu">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Tharun Tej Bodu, batch I</div>  
                        <p><strong>Working at Aldi Nord</strong></p>
                    </div>
                    <div class="testimonial-content quote">
                      "It's an extreme pleasure in opting the M.Sc in Big Data and Business Analytics with FOM university. The program has an in depth content with all the essential Big Data related technologies as well as the Business managerial exposure towards the Big Data Projects. The professors are loaded with real time exposure and the team had really supported in inculcating German culture with in us. I would recommend this course for new buddy professionals who want to explore more into Big Data world." 
                    </div>
                </div>       
            </div>            
          </div>          
        </div>
      </section>


      <section class="color-bg">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 product-content">
              <p class="heading-white">Proven program</p>              
              <ul>
                 <li>260 students from India enrolled in Five years</li>
                <li>Four batches have successfully graduated</li>
                <li>Fifth batch is in Germany pursuing 3rd and 4th semester</li>
                <li>Sixth batch to arrive in Germany in November / December 2023.</li>
                
    
              </ul>                
            </div>
            <div class="col-md-6 proven-program"></div>
          </div>
        </div>
      </section>

      <section class="color-bg">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 fom-university"></div>
           
            <div class="col-md-6 product-content">
             <p class="heading-white">FOM University of Applied Sciences</p>              
              <ul>
                  
                <li>Founded by Employers Association ( BCW Group )</li>
                <li>One of largest University for working professionals</li>
                <li>57000 students + 35 campuses across Germany</li>
                <li>Industry linked curriculum</li>
                
               
              </ul>                    
            </div>
          </div>
        </div>
      </section>
      
     <section class="color-bg">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 product-content padding-top-20">
               <p class="heading-white">Indira Global Study Center (IGSC)</p>              
                <ul>
                  <li>IGSC is division of Indira Group of Institutes, Pune</li>
                  <li>Group Institutes  offers AICTE approved PGDM and MBA program</li>
                  <li>100% placement record for MBA and PGDM students</li>
                  <li>Ranked among top 50 business schools in India</li>
                </ul>           
            </div>  
            <div class="col-md-6 igsc"></div>
          </div>
        </div>
      </section>

       <section class="faculty grey-bg">
        <div class="container">
          <div class="row">            
            <p class="heading text-center margin-top-15">Industry expert faculties (IGSC)</p>

            <div id="faculty-slider" class="owl-carousel">               
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/atul-tripathi.jpg" alt="Atul Tripathi">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Atul Tripathi</div>                        
                    </div>
                    <div class="testimonial-content quote">
                      Atul Tripathi has 17+ years of experience as Data Scientist with research areas in Data Analytics, Machine Learning,NLP, Image processing ,etc.
                    </div>
                </div>
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/ravi-changle.jpg" alt="Dr. Ravi Changle">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Dr. Ravi Changle  
                        </div>                        
                    </div>
                    <div class="testimonial-content quote">
                      Dr. Ravi Changle is a global AI and Data Science Researcher, Consultant and Trainer and serving SKA Analytics as it’s Founder Director.  
                    </div>
                </div>
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/munmun-ghosal.jpg" alt="Munmun Ghosal">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Munmun Ghosal </div>                        
                    </div>
                    <div class="testimonial-content quote"><i class="fa fa-quote-left">  
                        </i>Munmun Ghosal has more than 10 years of experience in academics and industry with research areas in Data Analytics, Machine Learning, VLSI and Signal processing.
                    </div>
                </div>
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/premanjan-biswas.jpg" alt="Mr. Premanjan Biswas">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Mr. Premanjan Biswas</div>                        
                    </div>
                    <div class="testimonial-content quote">
                      Mr. Premanjan Biswas is a corporate trainer. He has been training the employees of Big Data and Statistics department of Reserve Bank of India under the supervision of Computer Society of India (Mumbai Chapter). 
                    </div>
                </div>  
                 <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/supriya-katte.jpg" alt="Supriya V. Katte">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Supriya V. Katte</div>                        
                    </div>
                    <div class="testimonial-content quote">
                      Professor Supriya V. Katte. has done her Masters in Statistics, she has been working in Data science field for almost a decade. She was appointed as SAS Consultant and professional Trainer by SAS India. 
                    </div>
                </div> 
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/punam-bhoyar.jpg" alt="Dr. Punam Bhoyar">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Dr. Punam Bhoyar</div>                        
                    </div>
                    <div class="testimonial-content quote">
                      Dr. Punam Bhoyar is a post graduate in computer science completed her doctoral degree from Dr. BAMU Aurangabad University. She has a strong academic foundation.  
                    </div>
                </div> 
            <!--    <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/sunita-bangal.jpg" alt="Prof. Sunita Bangal">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Prof. Sunita Bangal </div>                        
                    </div>
                    <div class="testimonial-content quote">
                      Prof. Sunita Bangal is post graduate from University Department of Management (PUMBA-UDMS). Her keen interest in teaching lead her to be part of Indira Institute of Management, Pune.  
                    </div>
                </div>  -->
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/pradip-patil.jpg" alt="Mr.Pradip Patil">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Mr.Pradip Patil</div>                        
                    </div>
                    <div class="testimonial-content quote">
                      Mr.Pradip Patil  has been a full-time Assistant professor at the Indira Group of Institutes in Pune since 2010. He was appointed Assistant Professor of MCA & MBA-Business Analytics.
                    </div>
                </div>
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/neha-ramteke.jpg" alt="Neha Ramteke">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Neha Ramteke</div>                        
                    </div>
                    <div class="testimonial-content quote">
                      Neha is an Electronics Engineer and MBA in Systems from Pune University and Ph.D (Pursuing). She has an Experience of over 10 years.  
                    </div>
                </div>             
            </div>            
          </div>          
        </div>
      </section>
      
      <section class="faculty grey-bg">
        <div class="container">
          <div class="row">            
            <p class="heading text-center margin-top-15">Statements from the Chancellor and Dean of FOM</p>
            
            <div id="faculty-fom" class="owl-carousel">     
            
            
            <style> 
            .moretext {
  display: none;
}

           .moretext1 {
  display: none;
}</style>
            
             <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/Harald.jpg" alt="Dr. Harald Beschorner – Chancellor of FOM Hochschule">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Dr. Harald Beschorner<br>Chancellor of FOM Hochschule</div>                        
                    </div>
                    <div class="testimonial-content quote">
                     <p> In an increasingly globalised work environment, qualified personnel and </p> <p class="moretext"> managers face both opportunities and challenges. Those who want to develop and foster successful global business relations need sound language skills but also international expertise alongside experience working in multinational teams. FOM programmes enable you to improve your skills and intercultural competencies by studying practice-based case studies from the international business world and learning from experts in an international environment with the help of realistic business scenarios. <p><a class="moreless-button">Read more</a>
                    </div>
                </div>
                
                
                        
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/habil.jpg" alt="Prof. Dr. habil. Clemens C. Jäger – Dean and Head of International Office">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Prof. Dr. habil. Clemens C. Jäger <br >Dean and Head of International Office</div>                        
                    </div>
                    <div class="testimonial-content quote">
                     India's development is highly impressive from many different perspectives and </p> <p class="moretext1"> offers many joint opportunities   for the internationalization of companies and universities.FOM is taking this development into account with its commitment in India. <p><a class="moreless-button1">Read more</a>
                    </div>
                </div>
                
           <!--     <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/roger.jpg" alt="Prof. Dr. Roger Wilbert Henri Bons">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Prof. Dr. Roger Wilbert Henri Bons</div>                        
                    </div>
                    <div class="testimonial-content quote">
                      Prof. Roger W.H. Bons has been a full-time lecturer at the FOM in Aachen since September 2015. In November 2015, he was appointed Professor of Business Informatics.
                    </div>
                </div>
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/cornelia-heinisch.jpg" alt="Prof. Dr. Ing. Cornelia Heinisch">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Prof. Dr. Ing. Cornelia Heinisch</div>                        
                    </div>
                    <div class="testimonial-content quote">
                      Prof. Dr. Ing. Cornelia Heinisch has been a full-time lecturer at the FOM in Stuttgart since 2012. In July 2012 she was appointed as Professor of Business Informatics.  
                    </div>
                </div>
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/buchkremer.jpg" alt="Prof. Dr.Rüdiger Buchkremer">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Prof. Dr.Rüdiger Buchkremer</div>                        
                    </div>
                    <div class="testimonial-content quote">Prof. Buchkremer has been a full-time lecturer at the FOM Hochschule since 2009.He studied at the Ruhr University in Bochum and earned his doctorate at the State University of New York, USA.
                    </div>
                </div>
                <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/friederike.jpg" alt="Prof. Dr.Friederike Müller-Friemauth">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Prof. Dr.Friederike Müller-Friemauth</div>                        
                    </div>
                    <div class="testimonial-content quote">
                      Prof. Friederike Müller-Friemauth has been a full-time lecturer at the FOM in Cologne since September 2014. In the same year she was appointed as Professor of General Business Administration, in particular Strategic Marketing and Innovation Management.
                    </div>
                </div>  
                 <div class="testimonial-item equal-height style-6">
                    <div class="testimonial-image cell-left">
                        <img src="<?php echo base_url(); ?>images/guy-katz.jpg" alt="Prof. Guy Katz ">
                    </div>
                    <div class="cell-right">
                        <div class="testimonial-name">Prof. Guy Katz</div>                        
                    </div>
                    <div class="testimonial-content quote">
                      Prof. Guy Katz has been a full-time lecturer at the FOM in Munich since 2013 and was appointed as Professor of International Management & Leadership in March.
                    </div>
                </div>             -->                  
            </div>            
          </div>          
        </div>
      </section>

        <section class="color-bg">
        <div class="container">
          <div class="row"> 
            <div class="col-md-12 product-content">
             <p class="heading-white text-center margin-top-15">Our Privacy Policy</p>              
              <p>This is an educational institute's website (the "Institute"), and is owned by Indira Global Study Center (IGSC). The privacy policy (the “Privacy Policy” or “Policy”) explains how the Institute and all of its affiliates and subsidiaries use, share, and protect personal information that we collect from the website. This Policy does not apply to information that we may collect from you in other ways (for example, this Policy does not apply to information that you may provide to us by phone, fax or through conventional mail). </p>
              <p>If you are only browsing this website, we do not capture data that allows us to identify you individually. We do not use cookies, nor do we sell, distribute or rent your personal information to other parties for marketing purposes under any circumstances. We understand clearly that you and your information are one of our most important assets.</p>
              <p><strong>Collecting Your Personal Data:</strong></p>
              <p>While using our website, we may ask you to provide the Institute with certain personally identifiable information that can be used to contact or identify you. Personally identifiable information may include, but is not limited to: First and Last Name, e-mail address, phone number, qualification and current engagement. </p>
              <p><strong>Use of Your Personal Data:</strong></p>
              <p>The sole purpose of collecting the personal information is to evaluate your eligibility for the Academic programs like Bachelors and Masters Degree. We do not disclose nor sell your personal data to any third party or for any marketing purpose. We use this information to help us maintain the accuracy of the information we collect, to target our communications so that we can inform you of products, services or other offers that may be of interest to you, and for internal business analysis.</p>                    
           
       
            </div>
          </div>
        </div>
      </section>

      <a href="#" id="scroll" style="display: none;"><span></span></a>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>  
    <script src="<?php echo base_url(); ?>js/owl.carousel.min.js"></script>
    <link href="<?php echo base_url(); ?>commoncss/bootstrapValidator.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>commonjs/bootstrapValidator.min.js"></script>
       <script type="text/javascript">

$(document).ready(function() {
		$("#enquiry").bootstrapValidator();
});
</script>
    <script type="text/javascript">
          $(document).ready(function(){
          $("#testimonial-slider").owlCarousel({
              items:2,
              itemsDesktop:[1000,2],
              itemsDesktopSmall:[980,1],
              itemsTablet:[768,1],
              pagination:true,
              navigation:true,
              navigationText:["<",">"],
              autoPlay:true
          });
      });
    </script>
    <script type="text/javascript">
          $(document).ready(function(){
          $("#faculty-slider").owlCarousel({
              items:3,
              itemsDesktop:[1000,2],
              itemsDesktopSmall:[980,1],
              itemsTablet:[768,1],
              pagination:true,
              navigation:true,
              navigationText:["<",">"],
              autoPlay:true
          });
      });
    </script>
    <script type="text/javascript">
          $(document).ready(function(){
          $("#faculty-fom").owlCarousel({
              items:3,
              itemsDesktop:[1000,2],
              itemsDesktopSmall:[980,1],
              itemsTablet:[768,1],
              pagination:true,
              navigation:true,
              navigationText:["<",">"],
              autoPlay:true
          });
      });
    </script>
    <script type="text/javascript">
     $(document).ready(function(){ 
        $(window).scroll(function(){ 
            if ($(this).scrollTop() > 100) { 
                $('#scroll').fadeIn(); 
            } else { 
                $('#scroll').fadeOut(); 
            } 
        }); 
        $('#scroll').click(function(){ 
            $("html, body").animate({ scrollTop: 0 }, 600); 
            return false; 
        }); 
    });
    </script>  
    <script>
    function changeFunc() {
    var selectBox = document.getElementById("selectBox");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    if (selectedValue=="Working Professional"){
    $('#textboxes').show();
    }
     else {
   
     $('#textboxes').hide();
     }
    }
    </script>
    
    
    
<script>
    
$('.moreless-button').click(function() {
  $('.moretext').slideToggle();
  if ($('.moreless-button').text() == "Read more") {
    $(this).text("Read less")
  } else {
    $(this).text("Read more")
  }
});

$('.moreless-button1').click(function() {
  $('.moretext1').slideToggle();
  if ($('.moreless-button1').text() == "Read more") {
    $(this).text("Read less")
  } else {
    $(this).text("Read more")
  }
});


</script>

    <script type="text/javascript"> _linkedin_partner_id = "3238674"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type="text/javascript"> (function(l) { if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])}; window.lintrk.q=[]} var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(window.lintrk); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3238674&fmt=gif" /> </noscript>
@extends('layouts.app')
@section('title','Visit')
@section('bs')
<style>

</style>
@endsection
@section('content')
<div class="container-fluid pt-sm-5 pt-0">
    <div class="row pt-sm-5 pt-0">
        <div class="card-group">
            <div class="card ml-1">
                <img class="card-img-top" src="images/campus.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><b>Campus and Facilities:</b></h5>
                    <p class="card-text">Victoria Public School is located at a prime location near Vyas Park, Nays Sahar Bikaner. Located in the heart of the 
                    city, the school is easily accessible from other major areas of Bikaner. The school building is an impressive structure with clean and 
                    hygienic surrounding. The school offers multiple facilities for the overall development of the students and ensures enduring learning</p>
                   
                </div>
            </div>

            <div class="card ml-1">
                <img class="card-img-top" src="images/sports.jfif" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><b>Sports and Physical Education:</b></h5>
                    <p class="card-text">The education policy of Victoria Public School relies on the philosophy of "a healthy mind in a healthy body." 
                        The School motivates each child to actively participate in activities that strengthen them physically, mentally and emotionally. 
                        The school encourages participation in group activities, games and sports to instill team spirit and team work in them. 
                        The school also ensures their participation in Inter school and Inter-house competitions by providing excellent infrastructure and 
                        specialized coaches for a wide range of sports and games.</p>
                   
                </div>
            </div>

            <div class="card ml-1">
              <img class="card-img-top" src="images/playRoom.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><b>Play Room -A Way to Creativity</b></h5>
                <p class="card-text">Play-way Method is an fundamental put of the teaching learning process at the pre- primary level.
                     The games and activities en-courage creativity lying latent in students.</p>
                    
              </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="card-group">
            <div class="card ml-1">
                <img class="card-img-top" src="images/libraray.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><b>Library:</b></h5>
                    <p class="card-text">Library Knowledge is power and to impart good reading habits to the students, the school has two excellent and well 
                        stocked  libraries and a Reading Room. They cater to the thirst of junior and senior students. A wide range of books, newspapers, 
                        magazines, journals, CDs, DVDs etc, are available for self enrichment and to keep students abreast with current affairs. </p>
                </div>
            </div>

            <div class="card ml-1">
                <img class="card-img-top" src="images/seminarhall.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><b>Seminar Hall:</b></h5>
                    <p class="card-text"> Our school has a spacious and air-conditioned seminar hall and regular interactive workshops and seminars are 
                        conducted for the students and faculty development activities are conducted regularly for staff members.</p>
                   
                </div>
            </div>

            <div class="card ml-1">
              <img class="card-img-top" src="images/smartclass.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><b>Smart Classes- Technology Aided Education:</b></h5>
                <p class="card-text">For the smart students of the present generation, our school facilitates interactive and pleasing 
                    learning sessions leading to a better understanding of concepts of classroom teachings.</p>
                    
              </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="card-group">
            <div class="card ml-1">
                <img class="card-img-top" src="images/audio.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><b>Audio-Visual Equipped Classroom:</b></h5>
                    <p class="card-text">Audio-visual method of teaching is one of the finest of methods of teachings.Audio-visual 
                        aids are accessed frequently by teachers and students for power-point presentation, life lessons videos, educational videos and short movies
                        to reinforce learning of students. </p>
                </div>
            </div>

            <div class="card ml-1">
                <img class="card-img-top" src="images/specialeducation.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><b>Special Education - Walking Hand in Hand:</b></h5>
                    <p class="card-text"> Children are the hope of the bright nation. They are our most valuable treasures. Our Special Educations sessions 
                        are for the identification of specific problems of the students and addressing them in a manner that enhances the child's potential.</p>
                   
                </div>
            </div>

            <div class="card ml-1">
              <img class="card-img-top" src="images/Medical-Room.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><b>Medical Room:</b></h5>
                <p class="card-text">Our school facilitates medical facility for medical emergency in our campus. A well trained full time nurse attends to 
                    all medical emergencies. Regular eyes, teeth and general health check-ups are conducted. For emergencies, the school has tie-up with 
                    prestigious hospitals of the city.</p>
                    
              </div>
            </div>
        </div>
    </div>

    <div class="row mt-3 mb-3">
        <div class="card-group">
            <div class="card ml-1">
                <img class="card-img-top" src="images/counseling.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><b>Counseling Sessions: Need of the Day</b></h5>
                    <p class="card-text">In present era, counseling of the students is the need of the day and in accordance with educational 
                        guidelines, there is provision for a highly experienced and qualified counselor who is avail-able for all psychological issues pertaining 
                        to the students' adjustment with surroundings. </p>
                </div>
            </div>

            <div class="card ml-1">
                <img class="card-img-top" src="images/tour.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><b>Tours and Excursions</b></h5>
                    <p class="card-text"> Along with plethora of extra-curricular activities the school organizes tours and excursions for the students 
                        as such activities play a pivotal role in enriching the students' learning experience. Education, adventure and enjoyment are the purpose 
                        of tours there-fore selection of destinations for these excursions is done with these aim in mind.</p>
                </div>
            </div>

            <div class="card ml-1">
              {{-- <img class="card-img-top" src="images/smartclass.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><b>Medical Room:</b></h5>
                <p class="card-text">Our school facilitates medical facility for medical emergency in our campus. A well trained full time nurse attends to 
                    all medical emergencies. Regular eyes, teeth and general health check-ups are conducted. For emergencies, the school has tie-up with 
                    prestigious hospitals of the city.</p>
              </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection
@extends('layout.defaultadmin')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>General Tables</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">General</li>
              </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
      
              <div class="col-lg-12">
      
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Table with stripped rows</h5>
      
                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Position</th>
                          <th scope="col">Age</th>
                          <th scope="col">Start Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Brandon Jacob</td>
                          <td>Designer</td>
                          <td>28</td>
                          <td>2016-05-25</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Bridie Kessler</td>
                          <td>Developer</td>
                          <td>35</td>
                          <td>2014-12-05</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Ashleigh Langosh</td>
                          <td>Finance</td>
                          <td>45</td>
                          <td>2011-08-12</td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Angus Grady</td>
                          <td>HR</td>
                          <td>34</td>
                          <td>2012-06-11</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Raheem Lehner</td>
                          <td>Dynamic Division Officer</td>
                          <td>47</td>
                          <td>2011-04-19</td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
      
                  </div>
                </div>
      
              </div>
            </div>
        </section>

    </main>
@endsection
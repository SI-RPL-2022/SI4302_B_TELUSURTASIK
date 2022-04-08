@extends('master')
@section('content')

<section id=faq>
    <div class="container">
        <h2>Frequently Asked Questions</h2>
        <main>
        <details open>
          <summary>How I solve this issue?</summary>
          <div class="faq__content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor suscipit, iure tenetur eveniet, vero tempore delectus? Perferendis, quisquam ullam consequuntur?</p>
          </div>
        </details>
      
          <details>
          <summary>How to input your data on this board?</summary>
          <div class="faq__content">
            <p>Fugiat quo voluptas nulla pariatur? Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque. Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
          </div>
        </details>
         </main>
    </div>
</section>

<section  id="coba">
    <div class="container">
        <h2>Discussion</h2>
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                  <strong class="d-block text-gray-dark">@username</strong>
                  Playing ping pong all night long, everything's all neon and hazy. Yeah, she's so in demand. She's sweet as pie but if you break her heart. But down to earth. It's time to face the music I'm no longer your muse. I guess that I forgot I had a choice.
                </p>
              </div>
              <small class="d-block text-right mt-3">
                <a href="#" class="btn btn-primary">All updates</a>
              </small>
            </div>
            <div class="media text-muted pt-3">
              {{-- <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg> --}}
              <textarea name="text" id="text" cols="300" rows="5">
                  
              </textarea>
              <small class="d-block text-right mt-3">
                <a href="#" class="btn btn-primary">All updates</a>
              </small>
            </div>
        </div>
    </div>
</section>
    {{-- <section id="discuss">
        <div class="container" >
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="media flex-wrap w-100 align-items-center"> 
                                <img src="images/author-image1.jpg" class="d-block ui-w-40 rounded-circle" alt="">
                                <div class="media-body ml-3"> <a href="javascript:void(0)" data-abc="true">Tom Harry</a>
                                    {{-- <div class="text-muted small">13 days ago</div> 
                                </div>
                                {{-- <div class="text-muted small ml-3">
                                    <div>Member since <strong>01/1/2019</strong></div>
                                    <div><strong>134</strong> posts</div>
                                </div> 
                            </div>
                        </div>
                        <div class="card-body">
                            <p> For me, getting my business website made was a lot of tech wizardry things.  </p>
                        </div>
                        <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                            {{-- <div class="px-4 pt-3"> <a href="javascript:void(0)" class="text-muted d-inline-flex align-items-center align-middle" data-abc="true"> <i class="fa fa-heart text-danger"></i>&nbsp; <span class="align-middle">445</span> </a> <span class="text-muted d-inline-flex align-items-center align-middle ml-4"> <i class="fa fa-eye text-muted fsize-3"></i>&nbsp; <span class="align-middle">14532</span> </span> </div> 
                            <div class="px-4 pt-3"> <a href="#"button type="button" class="btn btn-primary"><i class="ion ion-md-create"></i>&nbsp; Reply</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    



@endsection


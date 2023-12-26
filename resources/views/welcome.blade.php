<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #fccb90;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to bottom right, rgba(252, 203, 144, 1), rgba(213, 126, 235, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to bottom right, rgba(252, 203, 144, 1), rgba(213, 126, 235, 1))
        }

        .mask-custom {
            background: rgba(24, 24, 16, .2);
            border-radius: 2em;
            backdrop-filter: blur(15px);
            border: 2px solid rgba(255, 255, 255, 0.05);
            background-clip: padding-box;
            box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
        }

        .chat {
          .scrollable-content {
            overflow-y: auto;
            max-height: calc(100vh - 200px); /* Adjust the height as needed */
          }

          .fixed-form {
            position: fixed;
            bottom: 10;
            right: 10;
            width: 55%;
            background-color:-webkit-linear-gradient(to bottom right, rgba(252, 203, 144, 1), rgba(213, 126, 235, 1));
            padding: 4px;
          }
        }
    </style>
</head>

<body class="antialiased">
    <section class="gradient-custom">
        <div class="container py-5">

            <div class="row">

                <div class="col-md-6 col-lg-5 col-xl-5 mb-4 mb-md-0">

                    <h5 class="font-weight-bold mb-3 text-center text-white">Member</h5>

                    <div class="card mask-custom">
                        <div class="card-body">

                            <ul class="list-unstyled mb-0">
                                <li class="p-2 border-bottom"
                                    style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                    <a href="#!" class="d-flex justify-content-between link-light">
                                        <div class="d-flex flex-row">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp"
                                                alt="avatar"
                                                class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">John Doe</p>
                                                <p class="small text-white">Hello, Are you there?</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-white mb-1">Just now</p>
                                            <span class="badge bg-danger float-end">1</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2 border-bottom"
                                    style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                    <a href="#!" class="d-flex justify-content-between link-light">
                                        <div class="d-flex flex-row">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp"
                                                alt="avatar"
                                                class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Danny Smith</p>
                                                <p class="small text-white">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-white mb-1">5 mins ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2 border-bottom"
                                    style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                    <a href="#!" class="d-flex justify-content-between link-light">
                                        <div class="d-flex flex-row">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp"
                                                alt="avatar"
                                                class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Alex Steward</p>
                                                <p class="small text-white">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-white mb-1">Yesterday</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2 border-bottom"
                                    style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                    <a href="#!" class="d-flex justify-content-between link-light">
                                        <div class="d-flex flex-row">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp"
                                                alt="avatar"
                                                class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Ashley Olsen</p>
                                                <p class="small text-white">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-white mb-1">Yesterday</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2 border-bottom"
                                    style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                    <a href="#!" class="d-flex justify-content-between link-light">
                                        <div class="d-flex flex-row">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-4.webp"
                                                alt="avatar"
                                                class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Kate Moss</p>
                                                <p class="small text-white">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-white mb-1">Yesterday</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2 border-bottom"
                                    style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                    <a href="#!" class="d-flex justify-content-between link-light">
                                        <div class="d-flex flex-row">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp"
                                                alt="avatar"
                                                class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Lara Croft</p>
                                                <p class="small text-white">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-white mb-1">Yesterday</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2">
                                    <a href="#!" class="d-flex justify-content-between link-light">
                                        <div class="d-flex flex-row">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                                                alt="avatar"
                                                class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Brad Pitt</p>
                                                <p class="small text-white">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-white mb-1">5 mins ago</p>
                                            <span class="text-white float-end"><i class="fas fa-check"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>


                <div class="chat col-md-6 col-lg-7 col-xl-7">

                    <ul class="list-unstyled text-white">

                          <ul class="list-unstyled text-white">
                            @forelse ($chats as $chat)
                            {{-- Prompt --}}
                            <li class="d-flex justify-content-between mb-4">
                              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                              class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
                              <div class="card mask-custom">
                                  <div class="card-header d-flex justify-content-between p-3"
                                      style="border-bottom: 1px solid rgba(255,255,255,.3);">
                                      <p class="fw-bold mb-0 pr-4">King Russ</p>
                                      <p class="text-light small  mb-0"><i class="far fa-clock"></i> {{$chat->created_at->diffForHumans()}}</p>
                                  </div>
                                  <div class="card-body">
                                      <p class="mb-0">
                                          {{$chat->content}}
                                      </p>
                                  </div>
                              </div>
                          </li>
                          {{-- End Prompt --}}

                            {{-- Response --}}
                            <li class="d-flex justify-content-between mb-4">
                              <div class="card mask-custom w-100">
                                  <div class="card-header d-flex justify-content-between p-3"
                                  style="border-bottom: 1px solid rgba(255,255,255,.3);">
                                      <p class="fw-bold mb-0">Gemini A.I</p>
                                      <p class="text-light small mb-0"><i class="far fa-clock"></i>{{$chat->response->created_at->diffForHumans()}}</p>
                                  </div>
                                  <div class="card-body">
                                      <p class="mb-0">
                                          {!! $chat->response->content !!}
                                      </p>
                                  </div>
                              </div>
                              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp" alt="avatar"
                                  class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong" width="60">
                          </li>
                          {{-- End Response --}}
                            @empty
                              {{-- Handle empty case --}}
                            @endforelse
                          </ul>
                        </div>

                        <div class="fixed-form">
                          <form action="{{ route('chat_prompt') }}" method="post" class="d-flex align-items-start">
                            @csrf
                            <div class="form-outline form-white flex-grow-1 me-3" style="width: 50%;">
                              <textarea name="user_prompt" class="form-control" id="textAreaExample3" rows="4"></textarea>
                              <label class="form-label" for="textAreaExample3">Message</label>
                            </div>
                            <button type="submit" class="btn btn-light btn-lg btn-rounded">Send</button>
                          </form>
                        </div>

                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                          integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
                        </script>
                        </body>

                        </html>
                    </ul>

                </div>

            </div>

        </div>
    </section>
                                  <script>
                                    var scrollableContent = document.querySelector('.scrollable-content');
                                    scrollableContent.scrollTop = scrollableContent.scrollHeight;
                                  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

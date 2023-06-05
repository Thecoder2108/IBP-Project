<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="tables"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Tables"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Authors table</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                name</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                course_id</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                teacher_id</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                description</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>

                                @foreach($table_classes as $table_classe)
                                <tr>
                                    <td>{{$table_classe->name}}</td>
                                <td>
                                    @foreach($courses as $course)
                                    {{$course->title}}
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($teachers as $teacher)
                                    {{$teacher->user->name}}
                                    @endforeach
                                </td>
                                    <td>{{$table_classe->description}}</td>

                                <td>
                                        {{-- <a class="btn btn-primary" href="{{route('admin.classesadd.edit',$table_classe->id)}}" role="button">edit</a> --}}

                                        {{-- <a class="btn btn-primary" href="{{route('admin.classesadd.destroy',$table_classe->id)}}" role="button">delete</a> --}}
                                        {{-- <form action="{{url('dashboard/classesadd',$table_classe->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a rel="tooltip" class="btn btn-success btn-link"
                                                    href="{{route('admin.classesadd.edit',$table_classe->id)}}" data-original-title=""
                                                    title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            <button type="submit" class="btn btn-danger btn-link"><i class="material-icons">close</i>
                                                <div class="ripple-container"></div></button>
                                        </form> --}}
                                        <form action="{{url('dashboard/classesadd',$table_classe->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a rel="tooltip" class="btn btn-success btn-link"
                                                    href="{{route('admin.classesadd.edit',$table_classe->id)}}" data-original-title=""
                                                    title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            <button type="submit" class="btn btn-danger btn-link"><i class="material-icons">close</i>
                                                <div class="ripple-container"></div></button>

                                        </form>
                                    </td>

                                </tr>
                                @endforeach

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>

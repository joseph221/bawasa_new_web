<div class="sidebar jsSubMainHeight pb-3">
    <div class="sidebar-info">
        <h4 class="sidebar-header "><i class="fa fa-tint"></i> {{ __('messages.Water_Services')}}</h4>
        <div class="info-items">
            <div class="">
                </a><a href="/requestservice">
                    <button type="button"
                        class=" btn btn-custom list-group-item list-group-item-action">
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> {{ __('messages.New_Connection_Service')}}
                    </button>
                </a>
            </div><br />
            <div class="">
                </a><a href="/report_issue">
                    <button type="button"
                        class="btn btn-custom list-group-item list-group-item-action">
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        {{ __('messages.Report_Issue')}} <br>
                    </button>
                </a>

            </div>
            {{-- <div class="">
                <a href="/remove_sewage">
                    <button type="button"
                        class="btn btn-custom list-group-item list-group-item-action">
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        {{ __('messages.Remove_Sewage_Water')}}
                    </button>
                </a>

            </div> --}}
        </div>
    </div>

    <div class="sidebar-info mb-2">
        <h4 class="sidebar-header"><i class="fa fa-bullhorn"></i> {{ __('messages.Anouncements')}}</h4>
        <div class="info-items">

            <ul class="list-unstyled programs p-1">
                @foreach ( $sidedata as $data)
                    <li class="border-bottom">
                        <div class="clearfix">
                            <span class="date float-right"><i class="far fa-calendar-alt"></i>
                                {{ \Carbon\Carbon::parse($data->date)->format('d M-Y') }}
                            </span>
                        </div>
                        <a class="link-black" href="/anouncements/{{ $data->id }}">
                            {{ \Illuminate\Support\Str::limit($data->content, 100) }} ..</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="text-center more">
            <a href="/anouncements" class="btn btn-custom">{{ __('messages.more_anouncements')}}
                <i class="fas fa-long-arrow-alt-right"></i>
            </a>
        </div>
    </div>

</div>

@extends('layouts.app')
@section('content')

<style>
    img{
            width:60%;
            height:60%;
        }
    body{
        padding:10px;
    }
    footer{
        text-align:center;
        padding:20px;
        background-color:#f7f5f5;
    }
    .copyright{
        font-size:13px;
    }
    .heading{
        padding:50px;
        background-color:#f7f5f5;
    }
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}
    tbody td:nth-child(2) {
            text-align: justify;
    }
</style>
    <div class="container mt-5">
        <center><img src="{{$info['image']['url']}}"></center>
        <div class="heading">
        <h1><a style="color:black;" href="{{$info['link']}}">{{$info['title']}}</a></h1>
        <p>{{$info['description']}}</p>
        </div>
        <br>
        <div style="overflow-x:auto;">
        <table id="news-table" class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Link</th>
                    <th>Guid</th>
                    <th>Publish Date</th>
                    <th>Creator</th>
                    <th>Enclosure</th>
                </tr>
            </thead>
            <tbody>
                @foreach($newsItems as $i)
                    <tr>
                        <td>{{ $i['title'] }}</td>
                        <td>{!! $i['description'] !!}</td>
                        <td><a href="{{$i['link']}}" target="_blank">Visit</a></td>
                        <td><a href="{{$i['guid']}}" target="_blank">Refer</a></td>
                        <?php
                         $c=strtotime($i['pubDate']);
                         $d=date("Y/d/m g:i:A",$c);
                        ?>
                        <td>{{$d}}</td>
                        <td>
                            @if(isset($i['dc:creator']['#text']))
                                {{$i['dc:creator']['#text']}}
                            @else
                                Anonymous
                            @endif    
                        </td>
                        <td>
                            @if(isset($i['enclosure']['@url']))
                             <img src="{{$i['enclosure']['@url']}}"/>
                            @else
                            <img src="{{ asset('img/imgnotfound.jpg')}}"/>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
       </div>
        <footer>
        <p class="copyright">{{$info['copyright']}}</p>
        <p><em><a style="color:black;" href="{{$info['image']['link']}}">{{$info['image']['title']}}</a></em></p>
        </footer>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#news-table').DataTable();
        });
    </script>
@endpush

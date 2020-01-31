@extends('backend.index')
@section('content')
    <div class="row">
    
        
        <div class="col-sm-8">
            <div class="table-responsive">
               <table class="table no-margin">
                  <thead>
                     <tr>
                        <th width="10px">No</th>
                        <th>Tên trang</th>
                        <th>Đường dẫn</th>
                     </tr>
                  </thead>
                  <tbody>
                    @foreach ($listPages as $item)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>
                                <a href="{{ route($item->route) }}" target="_blank">{{ $item->name_page }}</a>
                            </td>
                            <td><a href="{{ route($item->route) }}" target="_blank">{{ route($item->route) }}</a></td>
                        </tr>
                    @endforeach
                    
                    
                  </tbody>
               </table>
            </div>
        </div>
    </div>
@endsection
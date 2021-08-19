<div class="col-lg-4">
    <div class="blog_right_sidebar">
        <aside class="single_sidebar_widget search_widget">
            <form action="#">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder='Search Keyword'
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Search Keyword'">
                        <div class="input-group-append">
                            <button class="btns" type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                    type="submit">Search</button>
            </form>
        </aside>

        <aside class="single_sidebar_widget post_category_widget">


            <h4 class="widget_title">Kategori</h4>
            <ul class="list cat-list">
                @foreach($kategori as $data)
                <?php
                    $total = DB::table('artikel')
                            ->where('kategori_id', $data->id)
                            ->count();
                ?>
                <li>
                    <a href="{{ url('/artikel_v/kategori/'. $data->id) }}" class="d-flex">
                        <p>{{ $data->kt }}</p>
                        <p>({{ $total }})</p>
                    </a>
                </li>
                @endforeach
            </ul>
        </aside>

        <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Arsip Konten</h3>
            <?php 
                $artikel = DB::table('artikel')
                ->join('kategori', 'kategori.id', '=', 'artikel.kategori_id')
                ->select('artikel.*', 'kategori.kt')
                ->orderBy('created_at','desc')
                ->paginate(3);
            ?>
            @foreach($artikel as $data)
            <div class="media post_item">
                <img src="{{ asset('gambar/'. $data->gambar) }}" style="width:40%" alt="post">
                <div class="media-body">
                    <a href="{{url ('/artikel_v/detail/'.$data->id) }}">
                        <h3>{{ substr($data->judul, 0, 15) }}....</h3>
                    </a>
                    <p>{{  date('d M Y'), strtotime($data->created_at)}}</p>
                </div>
            </div>
            @endforeach
        </aside>
    </div>
</div>
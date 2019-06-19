<section class="category">
		  <div class="container">
		    <div class="row">
		      <div class="col-md-8 text-left">
		        <div class="row">
		          <div class="col-md-12">        
		            <h1 class="page-title">Arsip Berita BP3TKI</h1>
		          </div>
		        </div>
		        <div class="line"></div>
		        <div class="row">
						{listing}
						<article class="col-md-12 article-list">
		            <div class="inner">
		              <figure>
			              <a href="<?=$base_url?>berita/r/{slug_berita}">
			                <img src="<?=$base_url?>assets/upload/image/{gambar}">
		                </a>
		              </figure>
		              <div class="details">
		                <div class="detail">
		                  <div class="category">
		                   {nama_kategori_berita}
		                  </div>
		                  <div class="time">{tanggal_post}</div>
		                </div>
		                <h1><a href="<?=$base_url?>berita/r/{slug_berita}">{nama_berita}</a></h1>
		                <p>
		                  {isi_berita}...
		                </p>
		                <footer>
		                  <a class="btn btn-primary more" href="<?=$base_url?>berita/r/{slug_berita}">
		                    <div>More</div>
		                    <div><i class="ion-ios-arrow-thin-right"></i></div>
		                  </a>
		                </footer>
		              </div>
		            </div>
		          </article>
							{/listing}
		          <div class="col-md-12 text-center">
		            <ul class="pagination">
								{prev}
								{pagination}
								<li {is_active}><a href="?page={p}">{p}</a></li>
								{/pagination}
								{next}
		            </ul>
		            <div class="pagination-help-text">
		            	Showing {limit} results of {result_count} &mdash; Page {page}
		            </div>
		          </div>
		        </div>
		      </div>		
		      </div>
		    </div>
		  </div>
		</section>


@section('title')
{{ $data['brand_name'] }} Franchise
@endsection

<div>
    <div id="titlebar" class="gradient" style="background-image: url({{ isset($banner) ? asset('storage/'.$banner->image) : '../../images/page-title.jpg' }}">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Directory</h2>
              <nav id="breadcrumbs">
                <ul>

                  <li>{{ trans('message.directory-desc') }}</li>
                </ul>
              </nav>
            <nav id="breadcrumbs">
                <ul>
                  <li><a href="{{ route('home') }}">Home</a></li>
                  <li>Directory</li>
                </ul>
              </nav></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="blog-page">
          <div class="row">
              <div class="col-lg-4 col-md-4">
                <div class="sidebar right">

                  <div class="utf_box_widget margin-top-35">
                      <h3>{{ trans('message.disclaimer') }}</h3>
                      <ul class="utf_listing_detail_sidebar">
                         <p>{{ trans('message.disclaimer-desc') }}</p>
                     </ul>
                  </div>
                  @include('vendor.contact')

                  <div class="clearfix"></div>
                </div>
              </div>
            <div class="col-lg-8 col-md-8">
              <div class="utf_dashboard_list_box margin-top-0">
                <h4><i class="sl sl-icon-list"></i> {{ trans('message.franchise-title') }}</h4>

              </div>
              <div class="clearfix"></div>
            </div>
          <div class="col-lg-8 col-md-8">
            <div id="titlebar" class="utf_listing_titlebar">
              <li>
                    <div class="utf_list_box_listing_item">
                      <div class="utf_list_box_listing_item-img"><a href="#"><img src="{{ asset($data['brand_image'] ? '/storage/'.$data['brand_image'] : '/images/No_images.png') }}" alt=""></a></div>
                      <div class="utf_list_box_listing_item_content">
                        <div class="inner">
                          <h3>{{ $data->brand_name }}</h3>
                          <span> {!! $data->brand_description !!}</span><br>
                      </div>
                    </div>

                  </li>
            </div>
            <a  href="{{ asset('storage/'.$data['brand_brochure']) }}" download class="button gray btn btn-sm"><i class="fa fa-download"></i> Download Brochure</a>
            @auth
            <a href="https://wa.me/{{ $data['whatsapp_contact'] }}" class="button gray btn btn-sm"><i class="fa fa-phone"></i> Whatsapp Contact</a>
            @endauth
            <div id="utf_listing_overview" class="utf_listing_section">
                <h3 class="utf_listing_headline_part margin-top-30 margin-bottom-30">Franchise Details</h3>
              <div class="style-2">
                <div class="accordion">
                    <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> {{ trans('message.bussiness_information') }}</h3>
                    <div>
                        <table class="table table-hover">
                            <thead>
                                <th><b class="text-center">Informasi Bisnis</b></th>
                                <th class="text-right"><b >Franchise</b></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nama Merk</td>
                                    <td align="right">{{ $data['brand_name'] ? $data['brand_name'] : 'Tidak ada data' }}</td>
                                </tr>
                                <tr>
                                    <td>Konsep Bisnis</td>
                                    <td align="right">{{ $data['bussiness_concept'] ? $data['bussiness_concept'] : 'Tidak ada data' }}</td>
                                </tr>
                                <tr>
                                    <td>Kategori Bisnis</td>
                                    <td align="right">{{ $data['bussiness_category'] ? $data['bussiness_category'] : 'Tidak ada data' }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Bisnis</td>
                                    <td align="right">{{ $data['bussiness_type'] ? $data['bussiness_type'] : 'Tidak ada data' }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Perusahaan</td>
                                    <td align="right">{{ $data['company_name'] ? $data['company_name'] : 'Tidak ada data' }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat Perusahaan</td>
                                    <td align="right">{!! $data['company_address'] ? $data['company_address'] : 'Tidak ada data' !!}</td>
                                </tr>
                                <tr>
                                    <td>Tahun Berdiri</td>
                                    <td align="right">{{ $data['company_year'] ? $data['company_year'] : 'Tidak ada data' }}</td>
                                </tr>
                                <tr>
                                    <td>Total Gerai</td>
                                    <td align="right" >{{ $data['company_outlet'] ? $data['company_outlet'] : 'Tidak ada data' }}</td>
                                </tr>
                                <tr>
                                    <td>Asal Merk</td>
                                    <td align="right" >{{ $data['brand_origin'] ? $data['brand_origin'] : 'Tidak ada data' }}</td>
                                </tr>
                                <tr>
                                    <td>Asal Negara</td>
                                    <td align="right" >{{ $data['brand_country'] ? $data['brand_country'] : 'Tidak ada data' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> {{ trans('message.investment_information') }}</h3>
                    <div>
                        <table class="table table-hover">
                            <thead>
                                <th><b class="text-center">Informasi Investasi</b></th>
                                <th class="text-right"><b >Franchise</b></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mata Uang</td>
                                    <td align="right">{{ $data['currency'] ? $data['currency'] : 'Tidak ada data' }}</td>
                                </tr>
                                <tr>
                                    <td>Biaya Venture/Investasi</td>
                                    <td align="right" class="price">{{ $data['investment_value'] ? $data['investment_value'] : 'Tidak ada data' }}</td>
                                </tr>
                                <tr>
                                    <td>Biaya Awal</td>
                                    <td align="right" class="price">{{ $data['initial_cost'] ? $data['initial_cost'] : 'Tidak ada data' }}</td>
                                </tr>
                                <tr>
                                    <td>Royalty Fee</td>
                                    <td align="right">{{ $data['royalty_fee'] ? $data['royalty_fee'] . '% dari omset per bulan' : 'Tidak ada data' }}</td>
                                </tr>
                                <tr>
                                    <td>Durasi Lisensi</td>
                                    <td align="right">{{ $data['license_time'] ? $data['license_time'] . ' Tahun' : 'Tidak ada data' }}</td>
                                </tr>
                                <tr>
                                    <td>Return of Investment(ROI)</td>
                                    <td align="right">{{ $data['roi'] ? $data['roi'] . '%' : 'Tidak ada data' }}</td>
                                </tr>
                                <tr>
                                    <td>Perkiraan Laba bersih per bulan</td>
                                    <td align="right" class="price">{{ $data['estimated_profit'] ? $data['estimated_profit'] : 'Tidak ada data' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> {{ trans('message.additional_information') }}</h3>
                    <div>
                        <table class="table table-hover">
                            <thead>
                                <th><b class="text-center">Informasi Tambahan</b></th>
                                <th class="text-right"><b >Franchise</b></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jumlah Karyawan dalam 1 gerai</td>
                                    <td align="right">{{ $data['employees_number'] ? $data['employees_number'] : 'Tidak ada data' }}</td>
                                </tr>
                                <tr>
                                    <td>Minimum Luasan gerai (m2)</td>
                                    <td align="right" class="price">{{ $data['store_area'] ? $data['store_area'] : 'Tidak ada data' }}</td>
                                </tr>
                                <tr>
                                    <td>Syarat Lokasi Gerai</td>
                                    <td align="right">
                                        @if($data['store_location_requirements'])
                                            @if ($data['store_location_requirements'] == "Y")
                                                {{ trans('message.yes') }}
                                            @else
                                                {{ trans('message.no') }}
                                            @endif
                                        @else
                                            Tidak ada data
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Layanan Survei Lokasi </td>
                                    <td align="right">
                                        @if($data['store_services_requirements'])
                                            @if ($data['store_services_requirements'] == "Y")
                                                {{ trans('message.yes') }}
                                            @else
                                                {{ trans('message.no') }}
                                            @endif
                                        @else
                                            Tidak ada data
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pelatihan Karyawan</td>
                                    <td align="right">
                                        @if($data['employees_training'])
                                            @if ($data['employees_training'] == "Y")
                                                {{ trans('message.yes') }}
                                            @else
                                                {{ trans('message.no') }}
                                            @endif
                                        @else
                                            Tidak ada data
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Buku Panduan/SOP</td>
                                    <td align="right">
                                        @if($data['sop'])
                                            @if ($data['sop'] == "Y")
                                                {{ trans('message.yes') }}
                                            @else
                                                {{ trans('message.no') }}
                                            @endif
                                        @else
                                            Tidak ada data
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Penyedia POS/CRM System</td>
                                    <td align="right">
                                        @if($data['crm_system'])
                                            @if ($data['crm_system'] == "Y")
                                                {{ trans('message.yes') }}
                                            @else
                                                {{ trans('message.no') }}
                                            @endif
                                        @else
                                            Tidak ada data
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Penyediaan Peralatan Operasional</td>
                                    <td align="right">
                                        @if($data['operational'])
                                            @if ($data['operational'] == "Y")
                                                {{ trans('message.yes') }}
                                            @else
                                                {{ trans('message.no') }}
                                            @endif
                                        @else
                                            Tidak ada data
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td align="right"><a target="_blank" href="{{ url($data['website'] ? $data['website'] : '#') }}">{{ $data['website'] ? $data['website'] : 'Tidak ada data' }}</a></td>
                                </tr>
                                <tr>
                                    <td>Instagram</td>
                                    <td align="right"><a target="_blank" href="{{ url('https://www.instagram.com/'.$data['instagram'] ? 'https://www.instagram.com/'.$data['instagram'] : '#') }}">{{ $data['instagram'] ? $data['instagram'] : 'Tidak ada data' }}</a> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> {{ trans('message.brand_logo') }}</h3>
                    <div>
                        <img src="{{ asset($data['store_images'] ? 'storage/'.$data['store_images'] : 'backend-assets/images/notFound.jpg') }}" width="100%" alt="">
                    </div>
                    <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> {{ trans('message.supported') }}</h3>
                    <div>
                        <img src="{{ asset($data['brand_image'] ? 'storage/'.$data['brand_image'] : 'backend-assets/images/notFound.jpg') }}" width="100%" alt="">
                    </div>
                    <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> {{ trans('message.packet') }}</h3>
                    <div>
                        <?php $packet = json_decode($data['packet']); ?>
                        @if($packet)
                            <table class="table">
                                <tr>
                                    <th>Informasi Bisnis</th>
                                    @foreach($packet as $key => $value)
                                        <th>{{ $value->packet_name }}</th>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>Tipe</td>
                                    @foreach($packet as $key => $value)
                                        <td>{{ $value->jenis_paket }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>Ukuran (m2)</td>
                                    @foreach($packet as $key => $value)
                                        <td>{{ $value->ukuran_gerai }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>Biaya Venture/Investasi (Rp)</td>
                                    @foreach($packet as $key => $value)
                                        <td class="price">{{ $value->harga_investasi }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>Biaya Awal (Rp)</td>
                                    @foreach($packet as $key => $value)
                                        <td class="price">{{ $value->biaya_awal }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>Return of Investment(ROI) (Rp)</td>
                                    @foreach($packet as $key => $value)
                                        <td class="price">{{ $value->return_investment }} Tahun</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>Perkiraan Laba bersih per Bulan (Rp)</td>
                                    @foreach($packet as $key => $value)
                                        <td class="price">{{ $value->perkiraan_laba }} Tahun</td>
                                    @endforeach
                                </tr>
                            </table>
                        @else
                            <img src="{{ asset('backend-assets/images/notFound.jpg') }}" alt="">
                    @endif
                    </div>


                </div>
            </div>


            </div>

          </div></div>
        </div>
      </div>
</div>
@include('layouts.footer')

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>

    <script>
    $( '.price' ).mask('000.000.000.000.000',
        {reverse: true}
        );
    </script>
@endpush

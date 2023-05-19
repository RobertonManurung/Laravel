@extends('layouts.mst_dashboard_relog')
@section('content')
    <div class="team-member-area" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="section-title-4">
                            <h1><strong>REVIEW</strong> DATA</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="progress-group">
                        <div class="wrapper">
                            <div class="step step01 complete">
                                <progress class="progress" value="100" max="100"
                                          aria-describedby="Step 01"></progress>
                                <div class="progress-circle"></div>
                            </div>
                            <div class="step step02">
                                <progress class="progress" value="100" max="100"
                                          aria-describedby="Step 02"></progress>
                                <div class="progress-circle"></div>
                            </div>
                            <div class="step step03">
                                <progress class="progress" value="0" max="100"
                                          aria-describedby="Step 03"></progress>
                                <div class="progress-circle"></div>
                            </div>
                            <div class="step step04 complete">
                                <progress class="progress" value="0" max="100"
                                          aria-describedby="Step 04"></progress>
                                <div class="progress-circle"></div>
                            </div>
                            <div class="step step05">
                                <progress class="progress" value="0" max="100"
                                          aria-describedby="Step 05"></progress>
                                <div class="progress-circle"></div>
                            </div>
                        </div>
                        <div class="progress-labels">
                            <div class="label" style="color: black">Input</div>
                            <div class="label" style="color: black">Review</div>
                            <div class="label" style="color: black">Payment</div>
                            <div class="label" style="color: black">Process</div>
                            <div class="label" style="color: black">Report</div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-lg-12">
                    <div class="w3-container col-md-12">
                        <div class="col-md-8">
                            <h2><i class="fa fa-user"></i> Identity</h2>
                            <div class="w3-panel w3-card"><br>
                                <table>
                                    <tr>
                                        <td>Name</td>
                                        <td>&nbsp;:&nbsp;&nbsp;</td>
                                        <td><strong>{{ $member->name }}</strong></td>
                                    </tr>
                                    @if($member->nama_band!==null)
                                        <tr>
                                            <td>Band Name</td>
                                            <td>&nbsp;:&nbsp;&nbsp;</td>
                                            <td><strong>{{$member->nama_band}}</strong></td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td>Band Name</td>
                                            <td>&nbsp;:&nbsp;&nbsp;</td>
                                            <td><em>empty</em></td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td><br>E-mail</td>
                                        <td><br>&nbsp;:&nbsp;&nbsp;</td>
                                        <td><br><strong>{{ $member->email }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td><br>No. Telp/HP</td>
                                        <td><br>&nbsp;:&nbsp;&nbsp;</td>
                                        <td><br><strong>{{ $member->no_telp }}</strong></td>
                                    </tr>
                                </table>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h2><i class="fa fa-usd"></i> Cost Detail</h2>
                            <div class="w3-panel w3-card-4"><br>
                                <?php
                                $hstud = $studio->harga_studio;

                                $rpharga = number_format($hstud, 2, ",", ".");
                                $rptotal = number_format($harga, 2, ",", ".");
                                ?>
                                <table>
                                    <tr>
                                        <td>Studio Cost</td>
                                        <td>&nbsp;:&nbsp;&nbsp;</td>
                                        <td align="right"><strong>Rp{{$rpharga}}</strong>&nbsp;&nbsp;&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Duration (Hours)</td>
                                        <td>&nbsp;:&nbsp;</td>
                                        <td align="right"><strong>{{$total_waktu}}</strong>&nbsp;&nbsp;&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td align="right">&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&nbsp;<strong>&times;</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h5><strong>Total Cost</strong></h5></td>
                                        <td><h4><strong>&nbsp;:&nbsp;&nbsp;</strong></h4></td>
                                        <td align="right"><h4><strong>Rp{{$rptotal}}</strong>&nbsp;&nbsp;&nbsp;</h4>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <br>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <br>
                            <h2><i class="fa fa-tags"></i> Order Detail</h2>
                            <div class="w3-panel w3-card">
                                <div class="col-md-14">
                                    <div class="col-md-10">
                                        <table>
                                            <tr>
                                                <td><br>Studio Name</td>
                                                <td><br>&nbsp;:&nbsp;&nbsp;</td>
                                                <td><br>
                                                    <strong style="text-transform: uppercase">{{$studio->nama_studio}}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><br>Order Date</td>
                                                <td><br>&nbsp;:&nbsp;&nbsp;</td>
                                                <td><br>
                                                    <strong style="text-transform: uppercase">{{$dtdate}}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><br>Order Time</td>
                                                <td><br>&nbsp;:&nbsp;&nbsp;</td>
                                                <td><br>
                                                    <strong style="text-transform: uppercase">{{$waktu_habis}} &mdash; {{$waktu_mulai}}
                                                        WIB</strong>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><br>Addition Request</td>
                                                <td><br>&nbsp;:&nbsp;&nbsp;</td>
                                                <td>
                                                    @if($deskripsi!=null)
                                                        <br>
                                                        <strong style="text-transform: uppercase">{{$deskripsi}}</strong>
                                                    @else
                                                        <br>
                                                        <em style="text-transform: uppercase">empty</em>
                                                    @endif
                                                </td>
                                            </tr>
                                        </table>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><br>
                            <h2><i class="fa fa-hand-o-right"></i> Next Step</h2>
                            <div class="w3-panel w3-card-4"><br>
                                <div class="col-md-12 text-center">
                                    <h3>Next to Payment</h3>
                                    <h6>&nbsp;</h6>
                                    <form method="post" class="form-horizontal" action="{{route('user.buyer-studio')}}">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{$date}}" name="date">
                                        <input type="hidden" value="{{$date.' '.$waktu_mulai}}" name="waktu_mulai">
                                        <input type="hidden" value="{{$date.' '.$waktu_habis}}" name="waktu_habis">
                                        <input type="hidden" value="{{$studio_id}}" name="studio_id">
                                        <input type="hidden" value="{{$total_waktu}}" name="total_waktu">
                                        <input type="hidden" value="{{$harga}}" name="harga">
                                        @if($deskripsi!=null)
                                            <input type="hidden" value="{{$deskripsi}}" name="deskripsi">
                                        @else
                                            <input type="hidden" value="Kosong" name="deskripsi">
                                        @endif
                                        <button type="submit" class="btn btn-primary" data-placement="bottom"
                                                data-toggle="tooltip"
                                                title="setelah melakukan konfirmasi waktu pembayaran 30 menit. jika melewati 30 menit transaksi dianggap batal">
                                            CONFIRM
                                        </button>
                                    </form>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection
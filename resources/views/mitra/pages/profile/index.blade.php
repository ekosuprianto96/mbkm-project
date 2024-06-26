@extends('mitra.layouts.main')
<style>
    input[type=file]:hover {
        cursor: pointer;
    }
</style>
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h2 style="font-size: 1.2em" class="card-title card-title-dash">Perusahaan</h2>
                </div>
                <form class="form-sample">
                    <div class="row">
                        <div class="col-md-12">
                            <h3> Identity</h3>
                            <p class="card-description">Brand/Company general information</p>
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label">
                                        <strong>Legal Name <span class="text-danger">*</span></strong>
                                        <p class="m-0">Please contact us to have your legal name changed.</p>
                                    </label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row align-items-center">
                                        <label class="col-sm-3 col-form-label">
                                            <strong>Brand Name <span class="text-danger">*</span></strong>
                                            <p class="m-0">Please contact us to have your brand name changed.</p>
                                        </label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row align-items-center">
                                        <label class="col-sm-3 col-form-label">
                                            <strong>Website</strong>
                                        </label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h3>Mitra Details</h3>
                            <p class="card-description">Company detail informations</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row align-items-center">
                                        <label class="col-sm-3 col-form-label">
                                            <strong>Partner Category <span class="text-danger">*</span></strong>
                                        </label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row align-items-center">
                                        <label class="col-sm-3 col-form-label">
                                            <strong>Business Sector <span class="text-danger">*</span></strong>
                                        </label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row align-items-center">
                                        <label class="col-sm-3 col-form-label">
                                            <strong>Organization Size <span class="text-danger">*</span></strong>
                                        </label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row align-items-center">
                                        <label class="col-sm-3 col-form-label">
                                            <strong>Headquarter Location</strong>
                                        </label>
                                        <div class="col-sm-9">
                                          <textarea style="height: 150px" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row align-items-center">
                                        <label class="col-sm-3 col-form-label">
                                            <strong>NPWP <span class="text-danger">*</span></strong>
                                            <p class="m-0">NPWP stands for Nomor Pokok Wajib Pajak or Tax Identification. It is an identification number required for businesses run in Indonesia.</p>
                                        </label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h3>Profile Details</h3>
                            <p class="card-description">Brand detail informations</p>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="position-relative w-100 d-flex justify-content-center flex-column align-items-center border rounded"
                                        style="height: 200px;background-color: rgb(236, 236, 236)"
                                    >
                                        <i class="ri-image-add-line" style="font-size: 2.8em"></i>
                                        <span style="font-size: 1em">Pilih Gambar</span>
                                    </div>
                                    <div class="mt-3 w-100">
                                        <button type="button" class="btn position-relative btn-primary w-100">
                                            <input type="file" style="opacity: 0;position: absolute;z-index: 50;left: 0;right: 0;top: 0;bottom: 0">
                                            Pilih Gambar
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Mitra Tagline</label>
                                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Short Company Descriptions</label>
                                                <textarea class="form-control" style="height: 150px"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
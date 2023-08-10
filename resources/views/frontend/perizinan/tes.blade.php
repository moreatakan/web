@foreach ($seluruhkategori as $kategori)
                    <div class="mb-3">
                        <button style="width: 100%" class="btn btn-secondary" type="button" onclick="show()">
                            <div class="row">
                                <div class="col-md-6  text-start">
                                <i class="bi bi-arrow-down-square-fill"></i>
                                </div>
                                <div class="col-md-6 text-end">
                                    <i class="bi bi-arrow-down"></i>
                                </div>
                            </div>
                        </button>
                        <div id="hide" class="table-hide">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endforeach


                    
                    {{-- @foreach ($seluruhkategori as $kategori)
                    <div class="col-md-12 mb-3">
                        
                        <div class="dropdown">
                            <button style="width: 100%" class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="row">
                                    <div class="col-md-6  text-start">
                                    <i class="bi bi-arrow-down-square-fill"></i>
                                    {{ $kategori -> namakategori }}
                                    </div>
                                <div class="col-md-6 text-end">
                                    <i class="bi bi-arrow-down"></i>
                                </div></div>
                            
                            </button>

                            <div class=" d-none">
                                <ul class="dropdown-menu col-md-12">
                                
                                    <li>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Jenis Izin</th>
                                                    <th scope="col">Persyaratan</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                
                                </ul>
                            </div>
                            
                        </div>
                            </div>
                            
                    @endforeach --}}
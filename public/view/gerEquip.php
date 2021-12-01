<div class="height-100 bg-light container-fluid">
    <div class="row">
        <div class="box-cad col-lg-10 ">
            <h4>Gerenciar Equipamentos</h4>
            <form>
                <div class="form-row">
                    <table class="table table-striped">
                        <thead class="thead thead-style">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Projetor</td>
                                <td>8</td>
                                <td>Epson</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Microfone</td>
                                <td>6</td>
                                <td>Shure</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Câmera</td>
                                <td>4</td>
                                <td>Sony</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1">Equipamento</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="text">Nome</label>
                        <input type="text" class="form-control" id="" placeholder="Projetor, Impressora, Microfone, etc...">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="text">Quantidade</label>
                        <input type="text" class="form-control" id="" placeholder="1, 2, 3 ... 20">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="text">Descrição</label>
                        <input type="text" class="form-control" id="" placeholder="...">
                    </div>
                </div>

                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter" hrf="#">Editar</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Confirmar as Modificações no Equipamento</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Confira os dados do Equipamento antes de prosseguir.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-cancelar" data-dismiss="modal">Voltar</button>
                                <button type="submit" class="btn">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
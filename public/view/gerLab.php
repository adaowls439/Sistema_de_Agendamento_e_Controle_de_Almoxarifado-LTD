<div class="height-100 bg-light container-fluid">
    <div class="row">
        <div class="box-cad col-lg-10 ">
            <h4>Gerenciar Laboratório</h4>
            <form>
                <div class="form-row">
                    <table class="table table-striped">
                        <thead class="thead thead-style">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Local</th>
                                <th scope="col">Computadores</th>
                                <th scope="col">Capacidade</th>
                                <th scope="col">Recursos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Lab 02</td>
                                <td>Bloco B</td>
                                <td>12</td>
                                <td>20</td>
                                <td>Lousa</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Lab 03</td>
                                <td>Bloco B</td>
                                <td>8</td>
                                <td>20</td>
                                <td>...</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Lab 05</td>
                                <td>Bloco A</td>
                                <td>20</td>
                                <td>20</td>
                                <td>Lousa, Caixa de som</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1">Laboratório</label>
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
                        <input type="text" class="form-control" id="" placeholder="Laboratório 01, L1, LAB 1, etc...">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="text">Local</label>
                        <input type="text" class="form-control" id="" placeholder="Bloco 1, Bloco A, Campus João, etc...">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="text">Número máximo de alunos</label>
                        <input type="text" class="form-control" id="" placeholder="20, 30, 15">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="text">Quantidade de computadores</label>
                        <input type="text" class="form-control" id="" placeholder="08, 10, 25">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="text">Recursos disponíveis</label>
                        <input type="text" class="form-control" id="" placeholder="Projetor, Lousa, Impressora, Aparelho de som, etc...">
                    </div>
                </div>

                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter" hrf="#">Editar</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Confirmar Modificações do Laboratório</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Confira os dados do laboratório antes de prosseguir.</p>
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
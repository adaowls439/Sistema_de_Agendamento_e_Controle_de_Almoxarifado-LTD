<div class="height-100 bg-light container-fluid">
    <div class="row">
        <div class="box-cad col-lg-10 ">
            <h4>Gerenciar Usuário</h4>
            <form>
                <div class="form-row">
                    <table class="table table-striped">
                        <thead class="thead thead-style">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Matrícula</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>2021031234</td>
                                <td>João</td>
                                <td>joao@estacio.br</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>2021031434</td>
                                <td>Antônio</td>
                                <td>antonio@estacio.br</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>2020034214</td>
                                <td>Francisco</td>
                                <td>Francisco@estacio.br</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1">Selecione</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="text">Matrícula</label>
                        <input type="text" class="form-control" id="" placeholder="20211230...">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="text">Nome</label>
                        <input type="text" class="form-control" id="" placeholder="...">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="text">CPF</label>
                        <input type="text" class="form-control" id="" placeholder="Apenas números.">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="text">Email</label>
                        <input type="text" class="form-control" id="" placeholder="docente@estacio.br">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Nova Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="...">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Confirmar Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="...">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="text">Cargo e nível de permissões</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="opcao1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                1 - Apoio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="opcao2">
                            <label class="form-check-label" for="exampleRadios2">
                                2 - Docente
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="opcao3">
                            <label class="form-check-label" for="exampleRadios3">
                                3 - Secretaria
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="opcao4">
                            <label class="form-check-label" for="exampleRadios4">
                                4 - Administrador
                            </label>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter" hrf="#">Editar</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Confirmar as Modificações do Usuário</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Confira os dados do usuário antes de prosseguir.</p>
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
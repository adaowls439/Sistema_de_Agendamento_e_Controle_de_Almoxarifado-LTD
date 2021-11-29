<div class="height-100 bg-light container-fluid">
    <div class="row">
        <div class="box-cad col-lg-10 ">
            <h4>Agendar Equipamento</h4>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Data</label>
                        <input type="date" class="form-control" name="">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1">Início</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>6:00</option>
                            <option>7:00</option>
                            <option>8:00</option>
                            <option>9:00</option>
                            <option>10:00</option>
                            <option>11:00</option>
                            <option>12:00</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1">Fim</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>6:00</option>
                            <option>7:00</option>
                            <option>8:00</option>
                            <option>9:00</option>
                            <option>10:00</option>
                            <option>11:00</option>
                            <option>12:00</option>
                        </select>
                    </div>
                </div>
                <h4>Disponiveis neste horário</h4>
                <div class="form-row">
                    <table class="table table-striped">
                        <thead class="thead thead-style">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Quantidade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Projetor</td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Microfone</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Câmera</td>
                                <td>4</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1">Selecione</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Projetor</option>
                            <option>Microfone</option>
                            <option>Câmera</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1">Quantidade</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>

                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter" hrf="#">Agendar</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Confirmar Agendamento do Laboratório</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Você poderá cancelar o Agendamento em até 24 horas de antecedência.</p>
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
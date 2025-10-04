
<div class="contato-principal">

                <form action="{{ route('site.contato') }}" method="post">
                    @csrf
                    <input type="text" placeholder="Nome" class={{ $classe }} name='nome' id='nome'>
                    <br>
                    <input type="text" placeholder="Telefone" class={{ $classe }} name='telefone' id='telefone'>
                    <br>
                    <input type="text" placeholder="E-mail" class={{ $classe }} name='email' id='email'>
                    <br>
                    <select name='motivo_contato' class={{ $classe }}>
                        <option value="">Qual o motivo do contato?</option>
                        <option value="">Dúvida</option>
                        <option value="">Elogio</option>
                        <option value="">Reclamação</option>
                    </select>
                    <br>
                    <textarea name='mensagem' class={{ $classe }}>Preencha aqui a sua mensagem</textarea>
                    <br>
                    <button type="submit" class={{ $classe }}>ENVIAR</button>
                </form>
            </div>

                          
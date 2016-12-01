<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

    function __construct()     {
        parent::__construct();
        /*
         * Carrega a library 'session' para que seja possível fazer o uso
         * das sessões na aplicação
         */
        $this->load->library('session');
    }

    /*
     * Responsável por carregar a view com o formulário
     */
    public function Index()
    {
        $this->load->view('pag_inicial');
    }

    /*
     * Responsável por enviar o email
     */
    public function EnviarEmail()
    {
        // Carrega a library email
        $this->load->library('email');
        //Recupera os dados do formulário
        $dados = $this->input->post();
        $nome =$this->input->post('nome');

        //Inicia o processo de configuração para o envio do email
        $config['protocol'] = 'smtp'; // define o protocolo utilizado
        $config['wordwrap'] = TRUE; // define se haverá quebra de palavra no texto
        $config['validate'] = TRUE; // define se haverá validação dos endereços de email
        $config['smtp_host']= 'ssl://smtp.googlemail.com';
        $config['smtp_user']= 'ginfors@gmail.com';
        $config['smtp_pass']= 'novello123456';
        $config['smtp_port']= '465';
        $config['charset']      = "iso-8859-1";
        $config['mailtype']     = "html";
        $config['newline']      = "\r\n";



        /*
         * Se o usuário escolheu o envio com template, define o 'mailtype' para html,
         * caso contrário usa text
         */
        if(isset($dados['template']))
            $config['mailtype'] = 'html';
        else
            $config['mailtype'] = 'text';

        // Inicializa a library Email, passando os parâmetros de configuração
        $this->email->initialize($config);

        // Define remetente e destinatário
        $this->email->from($dados['email'], $dados['nome']);
        $this->email->to('giovani_tialvarosul@yahoo.com.br');


        // Define o assunto do email
        $this->email->subject($dados['assunto']);

        /*
         * Se o usuário escolheu o envio com template, passa o conteúdo do template para a mensagem
         * caso contrário passa somente o conteúdo do campo 'mensagem'
         */
        //if(isset($dados['template']))
           // $this->email->message($this->load->view('email-template',$dados, TRUE));
        //else
        $this->email->message($dados['mensagem']);

        /*
         * Se foi selecionado o envio de um anexo, insere o arquivo no email
         * através do método 'attach' da library 'Email'
         */
        //if(isset($dados['anexo']))
          //  $this->email->attach('./assets/img/logo_dasa.png');

        /*
         * Se o envio foi feito com sucesso, define a mensagem de sucesso
         * caso contrário define a mensagem de erro, e carrega a view home
         */
        if($this->email->send())
        {
            $this->session->set_flashdata('success','Email enviado com sucesso!');


            redirect(base_url(''));

            
        }
        else
        {
            $this->session->set_flashdata('error',$this->email->print_debugger());
            $this->load->view('pag_inicial');

        }

    }
}
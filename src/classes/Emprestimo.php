<?php

class Emprestimo
{
    private $item;
    private $id;
    private $data_emprestimo;
    private $previsao_entrega;
    private $data_entrega;
    private $nome;
    private $contato;
    private $usuario_id;

    public function __construct($id, $item, $data_emprestimo, $previsao_entrega, $data_entrega, $nome, $contato, $usuario_id)
    {
        $this->id = $id;
        $this->item = $item;
        $this->data_emprestimo = $data_emprestimo;
        $this->previsao_entrega = $previsao_entrega;
        $this->data_entrega = $data_entrega;
        $this->nome = $nome;
        $this->contato = $contato;
    }

    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getItem()
    {
        return $this->item;
    }
    
    public function setItem($item): void
    {
        $this->item = $item;
    }

    public function getDataEmprestimo()
    {
        return $this->data_emprestimo;
    }

    public function imprimirDataEmprestimo()
    {
        $data = new DateTime($this->data_emprestimo);
        return $data->format("d/m/Y");
    }
    
    public function setDataEmprestimo($data_emprestimo): void
    {
        $this->data_emprestimo = $data_emprestimo;
    }

    public function getPrevisaoEntrega()
    {
        return $this->previsao_entrega;
    }

    public function imprimirPrevisaoEntrega()
    {
        $data = new DateTime($this->previsao_entrega);
        return $data->format("d/m/Y");
    }
    
    public function setPrevisaoEntrega($previsao_entrega): void
    {
        $this->previsao_entrega = $previsao_entrega;
    }

    public function getDataEntrega()
    {
        return $this->data_entrega;
    }

    public function imprimirDataEntrega()
    {
        if ($this->data_entrega)
        {
            $data = new DateTime($this->data_entrega);
            return $data->format("d/m/Y");
        }else{
            return "";
        }
    }
    
    public function setDataEntrega($data_entrega): void
    {
        $this->data_entrega = $data_entrega;
    }

    public function getNome()
    {
        return $this->nome;
    }
    
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getContato()
    {
        return $this->contato;
    }
    
    public function setContato($contato): void
    {
        $this->contato = $contato;
    }

    public function getUsuarioId()
    {
        return $this->usuario_id;
    }
    
    public function setUsuarioId($usuario_id): void
    {
        $this->usuario_id = $usuario_id;
    }

    public function getStatus()
    {  
        if ($this->data_entrega) {
            return "Devolvido (disponível)";
        }else{
            $hoje = date("Y-m-d");
            $atrasado = strtotime($hoje) > strtotime($this->previsao_entrega);

            if ($atrasado) {
                return "<b>Emprestado (Atrasado)</b>";
            }else{
                return "Emprestado (No prazo)";
            }
        }
    }

    public function devolver($id)
    {
        if (!$this->data_entrega){
            return "<a href='src/validacoes/devolver.php?id={$this->id}'>Devolver</a>";
        }
    }
}
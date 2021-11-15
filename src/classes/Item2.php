<?php

class Item
{
    public string $item;
    public string $data_emprestimo;
    public string $previsao_entrega;
    public string $data_entrega;
    public string $status;

    public function __construct(string $item, string $data_emprestimo, string $previsao_entrega, string $data_entrega, string $status)
    {
        $this->item = $item;
        $this->data_emprestimo = $data_emprestimo;
        $this->previsao_entrega = $previsao_entrega;
        $this->data_entrega = $data_entrega;
        $this->status = $status;
    }

    public function getItem()
    {
        return $this->item;
    }
    
    public function setItem(string $item): void
    {
        $this->item = $item;
    }

    public function getDataEmprestimo()
    {
        return $this->data_emprestimo;
        //echo "Ola, mundo";
    }
    
    public function setDataEmprestimo(string $data_emprestimo): void
    {
        $this->data_emprestimo = $data_emprestimo;
    }

    public function getPrevisaoEntrega()
    {
        return $this->previsao_entrega;
    }
    
    public function setPrevisaoEntrega(string $previsao_entrega): void
    {
        $this->previsao_entrega = $previsao_entrega;
    }

    public function getDataEntrega()
    {
        return $this-$data_entrega;
    }
    
    public function setDataEntrega(string $data_entrega): void
    {
        $this->data_entrega = $data_entrega;
    }

    public function getStatus()
    {
        return $this->status;
    }
    
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}

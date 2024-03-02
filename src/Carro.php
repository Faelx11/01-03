<?php

class Carro{
    protected string $nome;
    private string $cor;
    private string $tipo;
    private string $ano;
    // public function __construct($cor, $ano, $tipo){
        //$this->cor = $cor;
        //$this->ano = $ano;
        //$this->tipo = $tipo;
    // }
    public function exibirDados(){
        return "Nome: " . $this->nome . "<br> Cor : " . $this->cor . "<br> Ano: " . $this->ano . "<br> Tipo: " . $this->tipo;
    }

    /**
     * Get the value of cor
     */
    public function getCor(): string
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     */
    public function setCor(string $cor): self
    {
        $this->cor = $cor;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of ano
     */
    public function getAno(): string
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     */
    public function setAno(string $ano): self
    {
        $this->ano = $ano;

        return $this;
    }
}

?>
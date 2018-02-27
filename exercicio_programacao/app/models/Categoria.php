<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 27/02/18
 * Time: 16:28
 */

class Categoria
{
    public $id;
    public $nome;
    public $descricao;
    public $foto;


    public function __construct($id, $nome, $descricao)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
    public $preco;
    public $categoria;
}

    //teste

    //Criando sem construct
    $cl = new Categoria();
    $cl->setId(1);
    $cl->setNome("Teste");
    $cl->setDescricao("Objeto bla bla");
    var_dump($cl);

    //Criando com construct

    $c2 = new Categoria(2, "Categoria 2", "Teste");
    var_dump($c2);

<?php
class Juego {
    private string $id;
    private string $codigo;
    private string $nombre;


    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCodigo(): string
    {
        return $this->codigo;
    }
    private string $name;

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param string $id
     * @param string $name
     */
    public function __construct(string $id, string $codigo, string $nombre)
    {
        $this->id = $id;
        $this->codigo = $codigo;
        $this->nombre = $nombre;
    }

}
?>
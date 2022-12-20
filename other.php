
<?php

class Personne
{
    private string $_nom;
    private string $_prenom;
    private DateTime $_dtNaissance;

    public function __construct(string $nom, string $prenom, string $dtNaissance)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dtNaissance = new DateTime($dtNaissance);
    }

    public function calcAge()
    {
        $dtAujourdhui = date("Y-m-d");
        $diff = date_diff($this->_dtNaissance, date_create($dtAujourdhui));
        return $diff->format('%y ans   '). "<br>"; 
    }

    public function __toString() {
        return $this->_prenom." ".$this->_nom." ".$this->calcAge();
    }

    public function get_nom()
    {
        return $this->_nom;
    }

    public function set_nom($_nom)
    {
        $this->_nom = $_nom;
        return $this;
    }

    public function get_prenom()
    {
        return $this->_prenom;
    }

    public function set_prenom($_prenom)
    {
        $this->_nom = $_prenom;
        return $this;
    }

    public function get_dtNaissance()
    {
        return $this->_dtNaissance;
    }

    public function set_dtNaissance($_dtNaissance)
    {
        $this->_dtNaissance = $_dtNaissance;
        return $this;
    }

}

$personne1 = new Personne("DUPONT", "Michel", "2000-06-19");
$personne2 = new Personne("DUCHEMIN", "Alice", "1800-12-31");

echo $personne1;
echo $personne2;

import { Injectable } from '@angular/core';
import * as listeUsager from '../assets/JSON/usagers.json' ;
import * as listeCandidat from '../assets/JSON/candidats.json' ;
import * as listeProduit from '../assets/JSON/products.json'

@Injectable({
  providedIn: 'root'
})
export class BdService {
  private users:any = (listeUsager as any).default;
  private candidats:any = (listeCandidat as any).default;
  private produits:any = (listeProduit as any).default;
  //liste des codes qui se trouvent dans le panier
  lstpanier:any[]=[];

  constructor() { }

  //retourne un tableau de json avec le endpoint /getjson de GET
  getData(filename:string){}

  //enregistre data sur le fichier filename avec le endpoint /postjson de POST
  postData(filename:string, data:any[]):any{}

  //met à jour la liste des produit dispo selon ce qui est dans le panier
  updateProduits(){}

  //appelle getData() afin d'avoir une liste de produits json
  getProduits(){}

  getPanier(){
    //apelle getProduit() pour avoir une liste des produits
    //retourne ceux qui se trouvent dans le lstpanier ()
  }

  //ajoute le produit si celui-ci n'est pas dans le panier. Sinon on le supprime du panier
  togglePanier(cpr:string){}

  //temp
  getUser(){
    return this.users;
  }

  getCandidats(){
    return this.candidats;
  }
}

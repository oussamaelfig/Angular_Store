import { Injectable } from '@angular/core';
import * as listeCandidat from '../assets/JSON/candidats.json';
import { HttpClient, HttpResponse } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { map, catchError} from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class BdService {
  private users:any =[];
  private candidats:any = (listeCandidat as any).default;
  private produits:any =[];
  //liste des codes qui se trouvent dans le panier
  lstpanier:any[]=[];

  constructor(protected http: HttpClient) {
    /*this.getData("usagers.json").subscribe((res)=>{
      this.users = res
      console.log(this.users)
    });*/
  }
  getData(filename:string):Observable<HttpResponse<any>> {
    let urlP = "http://localhost:3001/getjson?f=";
    let url = urlP.concat(filename);
    let data:any = this.http.get(url,{observe : 'response' });
    return (data);
  }

/*
  //retourne un tableau de json avec le endpoint /getjson de GET
  getData(filename:string){
    let data:any;
    let urlP = "http://localhost:3001/getjson?f=";
    let url = urlP.concat(filename);
    console.log(url);
    return this.http.get(url)/*.subscribe((res)=>{
      data = res
      console.log(data)
    })
    return data;
  }
*/
  //enregistre data sur le fichier filename avec le endpoint /postjson de POST
  postData(filename:string, data:any[]):any{
    let url = "http://localhost:3001/postData";
    const headers = { 'content-type': 'application/json'};
    let body = this.getData(filename);
    return this.http.post(url + '/postjson', body,{'headers':headers});
  }

  //met à jour la liste des produit dispo selon ce qui est dans le panier
  updateProduits(){

  }

  getUser():Observable<HttpResponse<any>>{
    return this.getData("usagers.json");
  }
    /*
    this.getData("usagers.json").subscribe((res)=>{
      this.users = res
      console.log(this.users)
    })
    return this.users;
    *//*
    this.getData("usagers.json").subscribe((res)=>{
      this.users = res
      console.log(this.users)
    });*/
    //User est initialisé dans le constructeur car cette liste ne changera pas.
    //this.users;


  //appelle getData() afin d'avoir une liste de produits json
  getProduits(){
    /*this.getData("products.json").subscribe((res)=>{
      this.produits = res;
    })

    return this.produits;
    */
    //return = this.getData("products.json").then((requesteddata) => { console.log(requesteddata);this.produits = requesteddata; return(this.produits); });
  }

  getPanier(){

    //apelle getProduit() pour avoir une liste des produits
    //retourne ceux qui se trouvent dans le lstpanier ()
  }

  //ajoute le produit si celui-ci n'est pas dans le panier. Sinon on le supprime du panier
  togglePanier(cpr:string){

  }

  getCandidats(){
    //this.getData("candidats.json").then((requesteddata) => { console.log(requesteddata);this.candidats = requesteddata; return(this.candidats); });
    //return this.candidats;
  }
}

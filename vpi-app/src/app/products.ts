import * as data from '../assets/JSON/products.json';

export interface Product {
  id: number;
  nom: string;
  quantité: number;
  description: string;
  photo: string[];
  prix: number;
}

export const products = (data as any).default;

public class ArticleMetier{
    private Seconnecter seconnecter;

    public ArticleMetier (){
        seconnecter = new Seconnecter();
    } 

    public void ajouter(Article article){
         String sql ="insert into article(libelle, prix, id_categorie) value(?,?,?)";

try{
          PreparedStatement ps = seconnecter.getConnection().PreparedStatement(sql);

         ps.setString(1,article.getLibelle());
          ps.setDouble(2,article.getPrix());
           ps.setInt(1,article.getCategorie().getId());
           
         //Lancer la requete 
           ps.executeUpdate();
}
    catch{

        
    }

    }
}
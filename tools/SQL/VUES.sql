CREATE or replace view v_regimeplat as
    select r.idregime, reg.descriRegime, p.idplat, p.descriPlat, r.quantite, u.descriUnite, p.pu, reg.poids, reg.duree from regimePlat r 
    join plat p on r.idplat=p.idplat join unite u on u.idunite=p.idunite join regime reg on reg.idregime=r.idregime;


CREATE or replace view v_regimeactivite as
    select r.idregime, reg.descriRegime, a.descriActivite, r.quantite from regimeActivite r 
    join activite a on a.idactivite=r.idactivite join regime reg on reg.idregime=r.idregime;

create or replace view v_totalcode as
    select utilisateur.iduser, utilisateur.nom, sum(code.valeur) as totalcode
    from utilisateur
    join entreecode on utilisateur.iduser=entreecode.iduser
    join code on entreecode.idcode=code.idcode
    where entreecode.idetat=11
    group by utilisateur.iduser, utilisateur.nom;

create or replace view v_totaldepense as
    select utilisateur.iduser, utilisateur.nom, sum(commanderegime.montant) as montant
    from utilisateur
    join commanderegime on utilisateur.iduser=commanderegime.iduser
    group by utilisateur.iduser, utilisateur.nom;

create or replace view v_code as
    select entreecode.*, code.descriCode, code.valeur, utilisateur.nom, etat.descriEtat
    from entreecode
    join code on entreecode.idcode=code.idcode
    join utilisateur on entreecode.iduser=utilisateur.iduser
    join etat on entreecode.idetat=etat=idetat;

create or replace view v_plat as
    select plat.*, descriUnite from plat join unite on unite.idunite=plat.idunite;

create or replace view v_nbuser as
    select count(iduser) as nombre
    from utilisateur;

create or replace view v_nbobjectif as
    select idobjectif, count(idprofileobjectif) as nombre
    from profileobjectif
    group by idobjectif;

create or replace view v_objectifstat as
    select v_nbobjectif.*, nombre*100/(select count(idprofileobjectif) from profileobjectif), objectif.descriObjectif
    from v_nbobjectif
    join objectif on v_nbobjectif.idobjectif=objectif.idobjectif;

create or replace view v_nbcommanderegime as
    select commanderegime.idregime, count(commanderegime.idcommanderegime) as nombre, regime.descriRegime
    from commanderegime
    join regime on commanderegime.idregime=regime.idregime
    group by commanderegime.idregime, regime.descriRegime;

create or replace view v_caisse as
    select sum(montant) as somme
    from commanderegime;
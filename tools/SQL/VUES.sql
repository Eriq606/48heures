CREATE or replace view v_regimeplat as
    select r.idregime, reg.descriRegime, p.descriPlat, r.quantite, u.descriUnite, p.pu, reg.poids, r.idplat from regimePlat r 
    join plat p on r.idplat=p.idplat join unite u on u.idunite=p.idunite join regime reg on reg.idregime=r.idregime;
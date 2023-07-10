create or replace view v_regime_plat as
    select regime.*, regimeplat.idregimeplat, regimeplat.quantite, plat.descriPlat, plat.pu, plat.idobjectif, plat.poids
    from regime
    join regimeplat on regime.idregime=regimeplat.idregime
    join plat on regimeplat.idplat=plat.idplat
    join unite on plat.idunite=unite.idunite;
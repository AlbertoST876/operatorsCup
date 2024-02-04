<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // SEASON 2
        $members = [
            [3, 1, "Haapi.ZP",       null, null,                               null, null, "2004-10-20", 1],
            [3, 1, "Dierna",         null, "https://twitter.com/RodrigoUp5",   null, null, "2003-05-24", 1],
            [3, 1, "Phan.v0",        null, null,                               null, null, "2003-11-11", 1],
            [3, 1, "LoLo.ZP",        null, null,                               null, null, "2003-04-09", 1],
            [3, 1, "Harrachiilolo",  null, null,                               null, null, "2001-07-24", 1],
            [3, 2, "L0ndraSexual",   null, null,                               null, null, "2001-12-07", 1],
            [3, 2, "LeoSanX.MXS",    null, null,                               null, null, "2004-05-31", 1],
            [2, 2, "Gxmez.MXS",      null, null,                               null, null, "2004-10-01", 1],
            [3, 2, "MikaaZ.MXS",     null, null,                               null, null, "2003-05-17", 1],
            [3, 2, "Ithan.MXS",      null, null,                               null, null, "2003-11-13", 1],
            [3, 1, "h0rus10.ZP",     null, "https://twitter.com/h0rus10",      null, null, "2001-06-15", 1],
            [3, 1, "M1uR4.ZP",       null, null,                               null, null, "2005-02-11", 1],
            [3, 1, "Onlyb4ns.ZP",    null, "https://twitter.com/shonnen17",    null, null, "1995-09-17", 1],
            [3, 3, "ArreBo.LFT",     null, null,                               null, null, "2004-08-31", 1],
            [3, 3, "Askelio",        null, null,                               null, null, "2000-06-22", 1],
            [3, 3, "Morales.Lynx",   null, null,                               null, null, "2005-02-05", 1],
            [3, 3, "Karma.3C",       null, null,                               null, null, "2005-03-01", 1],
            [2, 3, "Vaazquez.PAN",   null, null,                               null, null, "2003-08-16", 1],
            [3, 4, "Rufus.XP",       null, "https://twitter.com/rufus_rgm9",   null, null, "2000-06-20", 1],
            [3, 1, "Liipee.ZP",      null, null,                               null, null, "2002-08-02", 1],
            [3, 4, "S1RP3R1.XP",     null, null,                               null, null, "2003-10-06", 1],
            [2, 4, "Plainairp48.XP", null, null,                               null, null, "2003-05-03", 1],
            [3, 4, "Banana.XP",      null, null,                               null, null, "2003-02-24", 1],
            [2, 5, "Jordi.BH",       null, "https://twitter.com/JordiLopez38", null, null, "2002-08-06", 1],
            [3, 5, "Zzzape.BH ",     null, "https://twitter.com/ZzzapeR6",     null, null, "1993-12-30", 1],
            [3, 5, "G30RG3G.BH ",    null, "https://twitter.com/georgeg_r6",   null, null, "1998-12-07", 1],
            [3, 5, "Shir0.BH",       null, "https://twitter.com/ericlvagl_18", null, null, "2002-12-18", 1],
            [3, 5, "Attom-_-.BH ",   null, "https://twitter.com/Attom21",      null, null, "2003-10-21", 1],
            [3, 2, "ZzLeoWGA",       null, null,                               null, null, "2004-12-15", 1],
            [3, 3, "zRxb3n06",       null, null,                               null, null, null,         1],
            [1, 3, "zUnaiii",        null, null,                               null, null, null,         1],
            [1, 3, "WASSABII",       null, null,                               null, null, null,         1],
            [3, 1, "Perlaa.L4F",     null, null,                               null, null, null,         1],
            [3, 4, "IZANGIA.XP",     null, null,                               null, null, "2003-12-26", 1],
            [3, 2, "GOR4CH.",        null, null,                               null, null, "2004-01-05", 1],
            [3, 2, "Svl.ZEN",        null, null,                               null, null, "2005-09-20", 1],
            [3, 2, "Raikz.",         null, null,                               null, null, "2004-04-15", 1],
            [3, 3, "Aguila...",      null, null,                               null, null, "2004-03-06", 1],
            [3, 3, "Aquiles.Lynx",   null, null,                               null, null, "1997-08-01", 1],
            [3, 3, "ThoRR.Lynx",     null, null,                               null, null, "2004-01-24", 1],
            [3, 1, "Adam.ZP",        null, null,                               null, null, "2005-03-07", 1],
            [3, 4, "Sp1cyuff1ns.XP", null, null,                               null, null, "2004-04-16", 1],
            [3, 4, "Octane187.XP",   null, null,                               null, null, "2004-03-22", 1]
        ];

        // SEASON 3
        // $members = [
        //     [2, 1, "Plainairp48.XP",  null, null,                                  null, null,                                     "2004-05-03", 1],
        //     [3, 1, "kikidios.XP",     null, null,                                  null, null,                                     "2004-05-07", 1],
        //     [3, 1, "Sp1cyMuf1ns.XP",  null, null,                                  null, null,                                     "2004-04-16", 1],
        //     [3, 1, "IZANGiA.XP",      null, null,                                  null, null,                                     "2003-12-26", 1],
        //     [3, 1, "S1RP3R1.XP",      null, null,                                  null, null,                                     "2004-10-06", 1],
        //     [4, 1, "Ruben14.XP",      null, null,                                  null, null,                                     "2003-05-14", 1],
        //     [4, 1, "Octane187.XP",    null, null,                                  null, null,                                     "2004-11-22", 1],
        //     [2, 2, "Matt.Luna",       null, null,                                  null, null,                                     "2000-10-11", 1],
        //     [3, 2, "Antrox.Luna",     null, "https://twitter.com/AntroxR6",        null, null,                                     "1997-04-24", 1],
        //     [3, 2, "Dokkiin.Luna",    null, "https://twitter.com/DOKKIIN_",        null, null,                                     "2002-08-14", 1],
        //     [3, 2, "Jeimto.Luna",     null, "https://twitter.com/JeimtoR6S",       null, null,                                     "1996-01-04", 1],
        //     [3, 2, "Huayraa.Luna",    null, "https://twitter.com/Huayraa_",        null, null,                                     "1997-05-06", 1],
        //     [1, 3, "Dixter.SCUTI",    null, "https://twitter.com/Dixter999",       null, null,                                     null,         1],
        //     [2, 3, "valdivro2Spicy",  null, "https://twitter.com/valdiviaa_02",    null, null,                                     "2002-08-08", 1],
        //     [3, 3, "RxGNar2Spicy",    null, "https://twitter.com/RxGNaRR",         null, null,                                     "2002-10-06", 1],
        //     [3, 3, "Geok2Spicy",      null, "https://twitter.com/GeokR6",          null, null,                                     "2003-02-12", 1],
        //     [3, 3, "Alexx2Spicy",     null, "https://twitter.com/aleexx04__",      null, null,                                     "2004-10-10", 1],
        //     [3, 3, "D4N-_-I.ZERO",    null, "https://twitter.com/dan1glezz",       null, null,                                     "2002-06-11", 1],
        //     [2, 4, "AGlorius.ETY",    null, "https://twitter.com/AGloriusR6",      null, null,                                     "2001-12-13", 1],
        //     [3, 4, "Trust.ETY",       null, null,                                  null, null,                                     "1996-05-14", 1],
        //     [3, 4, "Perpi.2q",        null, null,                                  null, null,                                     "2000-07-21", 1],
        //     [3, 4, "Emiterm.ETY",     null, "https://twitter.com/Emitermr6",       null, null,                                     "2001-12-17", 1],
        //     [3, 4, "R3N-_-",          null, null,                                  null, null,                                     "2005-03-22", 1],
        //     [2, 5, "ReesWillz",       null, "https://twitter.com/ReesWillz",       null, "https://www.youtube.com/@reeswillz4918", "2001-08-14", 1],
        //     [3, 5, "Strop.crpt",      null, "https://twitter.com/JackGrealisreal", null, null,                                     "2001-12-20", 1],
        //     [3, 5, "Guti-",           null, null,                                  null, null,                                     "2000-05-09", 1],
        //     [3, 5, "Mike.-",          null, null,                                  null, null,                                     "2001-05-14", 1],
        //     [3, 5, "Scar.-_-",        null, "https://twitter.com/scar_r6",         null, null,                                     "2001-05-07", 1],
        //     [2, 6, "jemis.GRDX",      null, null,                                  null, null,                                     "1986-08-12", 1],
        //     [3, 6, "Damian.GRDX",     null, null,                                  null, null,                                     "2004-01-05", 1],
        //     [3, 6, "Panda.GRDX",      null, null,                                  null, null,                                     "2001-12-31", 1],
        //     [3, 6, "Breathtake.GRDX", null, null,                                  null, null,                                     "2000-03-15", 1],
        //     [3, 6, "Kayoss.GRDX",     null, null,                                  null, null,                                     "2003-04-15", 1],
        //     [4, 6, "b0urne.GRDX",     null, null,                                  null, null,                                     "1995-02-07", 1],
        //     [4, 6, "tRiPPeN.GRDX",    null, null,                                  null, null,                                     "2002-08-06", 1],
        //     [2, 7, "Tedd.BH",         null, null,                                  null, null,                                     "2003-08-16", 1],
        //     [3, 7, "Morales.BH",      null, "https://twitter.com/sergioomoraales", null, null,                                     "2005-02-13", 1],
        //     [3, 7, "Gordo.BH",        null, "https://twitter.com/AguilaR6_",       null, null,                                     "2004-03-06", 1],
        //     [3, 7, "Gomeez.BH",       null, null,                                  null, null,                                     "2004-11-17", 1],
        //     [3, 7, "Steix.BH",        null, null,                                  null, null,                                     "2005-04-11", 1],
        //     [1, 8, "Dukki.ASTO",      null, "https://twitter.com/DukkiR6S",        null, null,                                     "1998-06-17", 1],
        //     [2, 8, "Bluezz.ASTO",     null, "https://twitter.com/BlueZzFox",       null, null,                                     "2002-05-02", 1],
        //     [3, 8, "Kuutsa.ASTO",     null, null,                                  null, null,                                     "2001-06-26", 1],
        //     [3, 8, "Lxgiit.ASTO",     null, null,                                  null, null,                                     "2000-03-13", 1],
        //     [3, 8, "Proxic.ASTO",     null, null,                                  null, null,                                     "1999-01-23", 1],
        //     [3, 8, "elastrei",        null, null,                                  null, null,                                     "1996-03-18", 1],
        //     [4, 8, "Nebulawga",       null, null,                                  null, null,                                     "2003-06-07", 1],
        // ];

        foreach ($members as $member)
        {
            Member::factory() -> create([
                "role_id" => $member[0],
                "team_id" => $member[1],
                "nickname" => $member[2],
                "discord" => $member[3],
                "twitter" => $member[4],
                "twitch" => $member[5],
                "youtube" => $member[6],
                "birthday" => $member[7],
                "active" => $member[8],
            ]);
        }
    }
}

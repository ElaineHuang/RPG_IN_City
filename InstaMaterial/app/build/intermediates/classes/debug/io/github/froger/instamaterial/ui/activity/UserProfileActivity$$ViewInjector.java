// Generated code from Butter Knife. Do not modify!
package io.github.froger.instamaterial.ui.activity;

import android.view.View;
import butterknife.ButterKnife.Finder;

public class UserProfileActivity$$ViewInjector<T extends io.github.froger.instamaterial.ui.activity.UserProfileActivity> extends io.github.froger.instamaterial.ui.activity.BaseDrawerActivity$$ViewInjector<T> {
  @Override public void inject(final Finder finder, final T target, Object source) {
    super.inject(finder, target, source);

    View view;
    view = finder.findRequiredView(source, 2131558522, "field 'vRevealBackground'");
    target.vRevealBackground = finder.castView(view, 2131558522, "field 'vRevealBackground'");
    view = finder.findRequiredView(source, 2131558533, "field 'rvUserProfile'");
    target.rvUserProfile = finder.castView(view, 2131558533, "field 'rvUserProfile'");
    view = finder.findRequiredView(source, 2131558541, "field 'tlUserProfileTabs'");
    target.tlUserProfileTabs = finder.castView(view, 2131558541, "field 'tlUserProfileTabs'");
    view = finder.findRequiredView(source, 2131558536, "field 'ivUserProfilePhoto'");
    target.ivUserProfilePhoto = finder.castView(view, 2131558536, "field 'ivUserProfilePhoto'");
    view = finder.findRequiredView(source, 2131558537, "field 'vUserDetails'");
    target.vUserDetails = view;
    view = finder.findRequiredView(source, 2131558538, "field 'btnFollow'");
    target.btnFollow = finder.castView(view, 2131558538, "field 'btnFollow'");
    view = finder.findRequiredView(source, 2131558539, "field 'vUserStats'");
    target.vUserStats = view;
    view = finder.findRequiredView(source, 2131558535, "field 'vUserProfileRoot'");
    target.vUserProfileRoot = view;
  }

  @Override public void reset(T target) {
    super.reset(target);

    target.vRevealBackground = null;
    target.rvUserProfile = null;
    target.tlUserProfileTabs = null;
    target.ivUserProfilePhoto = null;
    target.vUserDetails = null;
    target.btnFollow = null;
    target.vUserStats = null;
    target.vUserProfileRoot = null;
  }
}

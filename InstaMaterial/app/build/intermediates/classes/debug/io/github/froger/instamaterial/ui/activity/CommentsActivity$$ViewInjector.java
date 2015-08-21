// Generated code from Butter Knife. Do not modify!
package io.github.froger.instamaterial.ui.activity;

import android.view.View;
import butterknife.ButterKnife.Finder;

public class CommentsActivity$$ViewInjector<T extends io.github.froger.instamaterial.ui.activity.CommentsActivity> extends io.github.froger.instamaterial.ui.activity.BaseDrawerActivity$$ViewInjector<T> {
  @Override public void inject(final Finder finder, final T target, Object source) {
    super.inject(finder, target, source);

    View view;
    view = finder.findRequiredView(source, 2131558504, "field 'contentRoot'");
    target.contentRoot = finder.castView(view, 2131558504, "field 'contentRoot'");
    view = finder.findRequiredView(source, 2131558505, "field 'rvComments'");
    target.rvComments = finder.castView(view, 2131558505, "field 'rvComments'");
    view = finder.findRequiredView(source, 2131558506, "field 'llAddComment'");
    target.llAddComment = finder.castView(view, 2131558506, "field 'llAddComment'");
    view = finder.findRequiredView(source, 2131558507, "field 'etComment'");
    target.etComment = finder.castView(view, 2131558507, "field 'etComment'");
    view = finder.findRequiredView(source, 2131558508, "field 'btnSendComment'");
    target.btnSendComment = finder.castView(view, 2131558508, "field 'btnSendComment'");
  }

  @Override public void reset(T target) {
    super.reset(target);

    target.contentRoot = null;
    target.rvComments = null;
    target.llAddComment = null;
    target.etComment = null;
    target.btnSendComment = null;
  }
}
